<?php $this->extend('templates/admin_layout') ?>

<?php $this->section('main-content') ?>

    <div class="container mt-5 mb-5">

    <?php if(isset($_SESSION['success'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> New data has been updated.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-12">
                <h3><a href="/kategori" class="btn btn-sm btn-danger">Cancel</a> Edit Category</h3>
                <hr>
                <!--nak hantar data form ke mana -->
                <?php echo form_open_multipart('kategori/edit/'.$kategori['id']) ?>
                <form class="mb-5">
                    
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $kategori['nama'] ?>">
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                         <div class="col-sm-10">
                             <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>

                      

                </form>
            </div>
            
              
        </div>
    </div>


    

</body>
</html>
<?php $this->endSection(); ?>