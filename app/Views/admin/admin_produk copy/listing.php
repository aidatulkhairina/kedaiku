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
                <h3>Senarai Kategori</h3>
                <a href="/kategori/add/" class="mb-3 btn btn-primary btn-sm float-right">Add New</a>
            </div>

            <div class="col-12">
                <table class="table table-light table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if(count($kategori)<1){ ?>
                        <tr>
                            <td colspan="3">No record found in category.</td>
                        </tr>
                    <?php }else{ ?>




                        <?php foreach($kategori as $p) { ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td>
                                <a href="/kategori/edit/<?= $p['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <button href="/kategori/delete/<?= $p['id'] ?>" onclick="confirm_delete(<?= $p['id'] ?>)" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php }  ?>
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
            window.location.href = '/kategori/delete/'+id;
        }
        
    }
</script>
<?php $this->endSection() ?>