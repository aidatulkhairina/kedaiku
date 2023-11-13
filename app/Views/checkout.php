<?php $this->extend('templates/front_layout') ?>

<?php $this->section('main-content') ?>



    <div class="row">
        <div class="col-12">
            <h2><a href="/bakul" class="btn btn-sm btn-warning">Back</a> Checkout</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
             <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th width="10%" >Quantity</th>
                        <th width="20%" style='text-align:center'>Total</th>

                    </tr>
                    <tbody >
                        <?php if(isset($_SESSION['cart']['items']) && (count($_SESSION['cart']['items']) > 0)) { ?>
                            <?php $counter=0; ?>
                            <?php $total_amount=0; ?>
                            <?php foreach($_SESSION['cart']['items'] as $item) { ?>
                            <tr>
                                <td><?php echo ++$counter ?></td>
                                <td><?php echo $item['nama'] ?></td>
                                <td><?php echo number_format(floatval($item['harga']),2) ?></td>
                                <td><?= $item['qty'] ?></td>
                                <td style='text-align:center'><?php echo number_format(floatval($item['harga'])*$item['qty'],2) ?></td>
                                
                            </tr>
                            <?php $total_amount += (floatval($item['harga'])*$item['qty']); ?>
                            
                            
                            <?php } ?>  
                            <tr>
                            <td colspan="4" align="right" ><strong>Total Amount</strong></td>
                            <td style='text-align:center'><strong><?= number_format($total_amount,2)?></strong></td>

                        </tr>
                        <?php }else{  ?>

                        <tr>
                            <td colspan='5'>
                                your cart is empty
                            </td>
                        </tr>

                        <?php } ?>

                        
                    </tbody>
                </thead>
            </table>
       
        </div>
    </div>


    <hr>

    <?php if(isset($_SESSION['form_failed'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid data!</strong> Please fill in the form with valid information</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

    <form action="/checkout" method="post">

    <?php
        $fullname_invalid = '';
        if (isset($_SESSION['form_error']['full-name'])){
            $fullname_invalid = 'is-invalid';
        }
        $fullname_value = (isset($_SESSION['form_data']['full-name'])) ? $_SESSION['form_data']['full-name'] : '';
    ?>

    <div class="mb-3">
        <label for="full-name" class="form-label ">Full Name</label>
        <input type="text" name="full-name" class="form-control <?= $fullname_invalid ?>" id="full-name" value="<?= $fullname_value ?>">
    </div>



    <div class="row">


    <?php
        $email_invalid = '';
        if (isset($_SESSION['form_error']['email'])){
            $email_invalid = 'is-invalid';
        }
        $email_value = (isset($_SESSION['form_data']['email'])) ? $_SESSION['form_data']['email'] : '';
   
    ?>

        <div class="mb-3 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control <?= $email_invalid ?>" id="email" value="<?= $email_value ?>" >
        </div>

        <?php
        $phone_invalid = '';
        if (isset($_SESSION['form_error']['phone'])){
            $phone_invalid = 'is-invalid';
        }
        $phone_value = (isset($_SESSION['form_data']['phone'])) ? $_SESSION['form_data']['phone'] : '';
   
        ?>

        <div class="mb-3 col-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control <?= $phone_invalid ?>" id="phone" value="<?= $phone_value ?>">
        </div>
    </div>

    <?php
        $address1_invalid = '';
        if (isset($_SESSION['form_error']['address1'])){
            $address1_invalid = 'is-invalid';
        }
        $address1_value = (isset($_SESSION['form_data']['address1'])) ? $_SESSION['form_data']['address1'] : '';
        $address2_value = (isset($_SESSION['form_data']['address2'])) ? $_SESSION['form_data']['address2'] : '';
   
        ?>

    <div class="mb-3">
        <label for="address1" class="form-label">Address</label>
        <input type="text" name="address1" class="form-control mb-2  <?= $address1_invalid ?>" id="address1" placeholder="address 1" value="<?= $address1_value ?>">
        <input type="text" name="address2" class="form-control" id="address2" placeholder="address 2" value="<?= $address2_value ?>">
    </div>

    <?php
        $poskod_invalid = '';
        if (isset($_SESSION['form_error']['poskod'])){
            $poskod_invalid = 'is-invalid';
        }
        $poskod_value = (isset($_SESSION['form_data']['poskod'])) ? $_SESSION['form_data']['poskod'] : '';
   
        ?>

    <div class="row">
        <div class="mb-3 col-2">
            <label for="poskod" class="form-label">Poskod</label>
            <input type="text" name="poskod" class="form-control <?= $poskod_invalid ?>" id="poskod" value="<?= $poskod_value ?>">
        </div>

        <?php
        $daerah_invalid = '';
        if (isset($_SESSION['form_error']['daerah'])){
            $daerah_invalid = 'is-invalid';
        }
        $daerah_value = (isset($_SESSION['form_data']['daerah'])) ? $_SESSION['form_data']['daerah'] : '';
   
        ?>

        
        <div class="mb-3 col-6">
            <label for="daerah" class="form-label">District</label>
            <input type="text" name="daerah" class="form-control <?= $daerah_invalid ?>" id="daerah" value="<?= $daerah_value ?>" >
        </div>

        <?php
        $state_invalid = '';
        if (isset($_SESSION['form_error']['state'])){
            $state_invalid = 'is-invalid';
        }
        $state_value = (isset($_SESSION['form_data']['state'])) ? $_SESSION['form_data']['state'] : null;
   
        ?>
        
        <div class="mb-3 col-4">
            <label for="state" class="form-label">State</label>
           
            <?= form_dropdown('state', $state, $state_value, ['class' => 'form-control'.$state_invalid]) ?>

        </div>
    </div>

    

    <button type="submit" class="btn btn-primary" name="payment_gateway" value="securepay">Pay with Online Banking</button>
    <button type="submit" class="btn btn-primary" name="payment_gateway" value="stripe">Pay with Stripe</button>
    
    </form>

<?php $this->endSection() ?>