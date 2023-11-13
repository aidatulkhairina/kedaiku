<?php $this->extend('templates/front_layout') ?>

<?php $this->section('main-content') ?>
<?php if(isset($_SESSION['success'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> Your cart updated</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if(isset($_SESSION['remove'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ops!</strong> Your item has been removed.</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div> 
        <?php } ?>

    <div class="row">
        <div class="col-12">
            <h2><a href="/" class="btn btn-sm btn-warning">Back</a> Your Cart</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/bakul/update" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
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
                            <td>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="confirm_remove(<?= $item['id'] ?>)">REMOVE</a>
                                </td>
                                <td><?php echo ++$counter ?></td>
                            <td><?php echo $item['nama'] ?></td>
                            <td><?php echo number_format(floatval($item['harga']),2) ?></td>
                            <td><input type="number" step='1' name="qty[<?= $item['id'] ?>]" value="<?= $item['qty'] ?>" class="form-control"></td>
                            <td style='text-align:center'><?php echo number_format(floatval($item['harga'])*$item['qty'],2) ?></td>
                               
                        </tr>
                            <?php $total_amount += (floatval($item['harga'])*$item['qty']); ?>
                            
                            
                            <?php } ?>  
                            <tr>
                            <td colspan="5" align="right" ><strong>Total Amount</strong></td>
                            <td style='text-align:center'><strong><?= number_format($total_amount,2)?></strong></td>

                        </tr>
                        <?php }else{  ?>

                        <tr>
                            <td colspan='6'>
                                your cart is empty
                            </td>
                        </tr>

                        <?php } ?>

                        
                    </tbody>
                </thead>
            </table>

            <a href="/checkout" class="btn btn-primary float-end mb-3 ">Checkout</a>
            <button href="/checkout" class="btn btn-success float-end mb-3 mx-2">Update Cart</button>
       
            </form>
        
        </div>
    </div>

    <script>
    function confirm_remove(id){
        if(confirm('Are your sure to remove the item?')){
            window.location.href = '/bakul/remove/'+id;
        }
       
    }
</script>



<?php $this->endSection() ?>