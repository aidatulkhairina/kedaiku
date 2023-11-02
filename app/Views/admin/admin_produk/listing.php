<?php $this->extend('templates/admin_layout') ?>

<?php $this->section('main-content') ?>

    <div class="container">

        <?php if(isset($_SESSION['success'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> New data has been added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if(isset($_SESSION['deleted'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> New data has been deleted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-12 pt-4">
                <h3>Senarai Produk</h3>
                <a href="/produk/add/" class="mb-3 btn btn-primary btn-sm float-right">Add New</a>
            </div>

            <div class="col-12">
                <table class="table table-light table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($produk as $p) { ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><img src="/img/<?= $p['gambar'] ?>" alt="" width="130" height="90"></td>
                            <td><?= $p['nama'] ?></td>
                            <td>RM <?= number_format($p['harga'],2) ?></td>
                            <td>
                                <a href="/produk/edit/<?= $p['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <button href="/produk/delete/<?= $p['id'] ?>" onclick="confirm_delete(<?= $p['id'] ?>)" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        


        <div id="my-pagination">
            <?= $pager->links() ?>
        </div>

      
            
    </div>

       

<script>
    function confirm_delete(id){
        if(confirm('Are your sure to delete record ID '+id+'?')){
            window.location.href = '/produk/delete/'+id;
        }
        
    }
</script>
<?php $this->endSection() ?>