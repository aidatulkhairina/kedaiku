<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Checkout extends BaseController
{

    var $data;
    var $state = [
        '' => '[-- sila pilih negeri --]',
        'KL' => 'KL',
        'Putrajaya' => 'Putrajaya',
        'Labuan' => 'Labuan',
        'Selangor' => 'Selangor',
        'Perak' => 'Perak',
        'Kedah' => 'Kedah',
        'Pulau Pinang' => 'Pulau Pinang',
        'Perlis' => 'Perlis',
        'Kelantan' => 'Kelantan',
        'Terengganu' => 'Terengganu',
        'Pahang' => 'Pahang', 
        'Johor' => 'Johor',
        'Melaka' => 'Melaka',
        'Negeri Sembilan' => 'Negeri Sembilan',
        'Sabah' => 'Sabah',
        'Sarawak'=> 'Sarawak'

    ];

    function __construct(){
        
        $this->session = session();
        
        $this->data = [
            'state' => $this->state
        ];

        $this->ordersModel = new \App\Models\OrdersModel();
        $this->orderItemsModel = new \App\Models\OrderItemsModel();
        $this->paymentModel = new \App\Models\PaymentModel();
    
    }

    function index(){
        return view('checkout.php', $this->data);
    }

    private function get_cart_items(){
        if(isset($_SESSION['cart']['items'])){
            return count($_SESSION['cart']['items']);
            
        }
        return 0;
    }

    private function get_cart_qty(){
        $qty = 0;
        if(isset($_SESSION['cart']['items']) && (count($_SESSION['cart']['items']) > 0)){

            foreach($_SESSION['cart']['items'] as $item){
                $qty += $item['qty'];
            }
            
        }
        return $qty;
    }

    private function get_cart_total_amount(){
        $total_amount = 0;
        if(isset($_SESSION['cart']['items']) && (count($_SESSION['cart']['items']) > 0)){

            foreach($_SESSION['cart']['items'] as $item){
                $total_amount += ($item['harga'] * $item['qty']);
            }
            
        }
        return $total_amount;
    }

    function process_checkout(){
        //echo "proses cekout dulu";

        $validation = \Config\Services::validation();

        $validation->setRule('full-name', 'FullName', 'required|min_length[3]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('phone', 'Phone Number', 'required|min_length[10]');
        $validation->setRule('address1', 'Address', 'required|min_length[10]');
        $validation->setRule('poskod', 'Poskod', 'required|numeric|exact_length[5]');
        $validation->setRule('daerah', 'District', 'required|min_length[3]');
        $validation->setRule('state', 'State', 'required');

        if($validation->run($_POST)){
            //$qty = $this->request->getPost('qty');
            helper('text');

            $order_no = random_string('alnum', 10);

            $payment_data = [
                'full-name' => $this->request->getPost('full-name'), 
                'email' => $this->request->getPost('email'),
                'order_no' => $order_no,
                'phone' => $this->request->getPost('phone'),
                'address1' => $this->request->getPost('address1'),
                'address2' => $this->request->getPost('address2'),
                'daerah' => $this->request->getPost('daerah'),
                'state' => $this->request->getPost('state'),
                'poskod' => $this->request->getPost('poskod'),
                'total_amount' => $this->get_cart_total_amount(),
                'qty' => $this->get_cart_qty(),
                'items' => $this->get_cart_items(),
                'status' => 'pending-payment'
                // 'tracking_no',
                // 'courier'
            ];

            $order_id = $this->ordersModel->insert($payment_data);

            $payment_data['order_id'] = $order_id;
            $payment_data['items'] = [];

            foreach($_SESSION['cart']['items'] as $item){
                $order_item = [
                        'order_id' => $order_id,
                        'produk_id' => $item['id'],
                        'harga' => $item['harga'],
                        'qty' => $item['qty']
                ];
                $payment_data['items'][] = $order_item;

                $this->orderItemsModel->insert($order_item);
            }

            $payment_gateway = $this->request->getPost('payment_gateway');
            
            $this->paymentModel->insert([
                'payment_gateway' => $payment_gateway,
                'data' => date('Y-m-d H:i:s')."\n".json_encode($payment_data)."\n",
                'order_no' => $order_no,
                'status' => 'pending'
            ]);

            $payment_data['redirect_url'] = site_url('checkout/redirect/'.$payment_gateway);
            $payment_data['callback_url'] = site_url('checkout/callback/'.$payment_gateway);


            switch($payment_gateway){
                case 'securepay' :
                    $sp = new \App\Libraries\Payment\SecurePay;
                    $sp->go($payment_data);
                    break;
            }

        }
        else{
            // echo "please fill in the form";

            $_SESSION['form_data'] = $_POST;
            $_SESSION['form_error'] = $validation->getErrors();
            $_SESSION['form_failed'] = true;

            $this->session->markAsFlashData('form_data');
            $this->session->markAsFlashData('form_error');
            $this->session->markAsFlashData('form_failed');

            return redirect()->back();

        }
    }

    function redirect($payment_gateway = ''){
        
        
        if($payment_gateway == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

              

        switch($payment_gateway){
            case 'securepay' :

                $sp = new \App\Libraries\Payment\SecurePay();
                $order_no = $this->request->getPost('order_number');
                $payment_status = $this->request->getPost('payment_status');
          
                break;
        }


        // if($sp->verify()){

            $payment = $this->paymentModel->where('order_no', $order_no)->first();
            $order = $this->ordersModel->where('order_no', $order_no)->first();
        

            if($payment_status == 'true'){
                
                $payment['status'] = 'success';
                $order['status'] = 'success';  
                      
            }
            else{
                $payment['status'] = 'failed';
                $order['status'] = 'failed';
            }
            
            
            $payment['data'] .= "\n".date('Y-m-d H:i:s')."\n".json_encode($_POST)."\n";
                
            $this->paymentModel->update($payment['id'], $payment);
            $this->ordersModel->update($order['id'], $order);

            
           
            

        
        // }
        // else{
        //     throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        // }

        if($payment_status == 'true'){
                $email = \Config\Services::email();

                $email->setTo($order['email']);
                $email->setCC('nero@nero.com');
                $email->setBCC('nero2@nero.com');

                $email->setSubject('thankyou for the order ['.$order['order_no'].']');
                $email->setMessage('Thanks! Please come again');

                // $email->send();
                try {
                    $email->send();
                } catch (\Exception $e) {
                    log_message('error', 'Email sending error: ' . $e->getMessage());
                }
            
            return redirect()->to('/checkout/thankyou/'.$order_no);
        }
            return redirect()->to('/cart');
        
        // echo "<pre>";
        // echo $payment_gateway;
        // var_dump($_POST);
        // echo "</pre>";
    }

    public function thankyou($order_no = ''){
        if($order_no == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $this->data['order'] = $this->ordersModel->where('order_no', $order_no)->first();
        
        if((!$this->data['order']) || ($this->data['order']['status'] != 'success')){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        
        }



        $this->data['order_item'] = $this->orderItemsModel->where('order_id', $this->data['order']['id'])->findAll();
        
        $produk_ids = [];
        foreach($this->data['order_item'] as $items){
            $produk_ids[] = $items['produk_id'];
        }

        $produkModel = new \App\Models\ProdukModel();

        $produks= $produkModel->find($produk_ids);
       
        $produk2 = [];
        foreach($produks as $p){
            $produk2[ $p['id'] ] = $p;
        }

        $this->data['produk'] = $produk2;

        return view('thankyou', $this->data);
    }


}

?>