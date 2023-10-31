<?php $this->extend('templates/front_layout') ?>

<?php $this->section('main-content') ?>
    
    <div class="row">
        <div class="col-12">
            <h2><a href="/produk_homepage" class="btn btn-sm btn-danger">Back</a> Your Cart</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th width="10%" >Quantity</th>
                        <th width="30%" style='text-align:center'>Total</th>
                    </tr>
                    <tbody >
                        <?php if(isset($_SESSION['cart']['items']) && (count($_SESSION['cart']['items']) > 0)) { ?>
                            <?php $counter=0; ?>
                            <?php $total_amount=0; ?>
                            <?php foreach($_SESSION['cart']['items'] as $items) { ?>
                            <tr>
                                <td><?php echo ++$counter ?></td>
                            <td><?php echo $items['nama'] ?></td>
                            <td><?php echo number_format($items['harga'],2) ?></td>
                            <td><input type="number" step='1' value="1" class="form-control"></td>
                            <td style='text-align:center'><?php echo number_format($items['harga']*$items['qty'],2) ?></td>
                            </tr>
                            <?php $total_amount += ($items['harga']*$items['qty']); ?>
                            
                            
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

            <a href="/checkout" class="btn btn-primary float-end mb-3">Checkout</a>
        </div>
    </div>



<?php $this->endSection() ?>