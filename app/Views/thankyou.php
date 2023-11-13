<?php $this->extend('templates/front_layout') ?>

<?php $this->section('main-content') ?>



    <div class="row">
        <div class="col-12">
            <h2> Thankyou! come again..</h2>
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
                           <?php $counter=0; ?>
                            <?php $total_amount=0; ?>
                            <?php foreach($order_item as $item) { ?>
                            <tr>
                                <td><?php echo ++$counter ?></td>
                                <td><?php echo $produk[$item['produk_id']]['nama'] ?></td>
                                <td><?php echo number_format(floatval($item['harga']),2) ?></td>
                                <td><?= $item['qty'] ?></td>
                                <td style='text-align:center'><?php echo number_format(floatval($item['harga'])*$item['qty'],2) ?></td>
                                
                            </tr>
                            
                            <?php } ?>  
                            <tr>
                            <td colspan="4" align="right" ><strong>Total Amount</strong></td>
                            <td style='text-align:center'><strong><?= number_format($order['total_amount'],2)?></strong></td>

                        </tr>
                     

                        
                    </tbody>
                </thead>
            </table>
       
        </div>
    </div>


    

<?php $this->endSection() ?>