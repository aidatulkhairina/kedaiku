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
                <h3><a href="/produk" class="btn btn-sm btn-danger">Cancel</a> Edit Product</h3>
                <hr>
                <!--nak hantar data form ke mana -->
                <?php echo form_open_multipart('produk/edit/'.$produk['id']) ?>
                <form class="mb-5">
                    
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $produk['nama'] ?>">
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" value="<?= number_format($produk['harga'] , 2) ?>">
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" rows="3" name="description" placeholder="tulis sesuatu..."><?= $produk['description'] ?>"</textarea>

                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <img src="/img/<?= $produk['gambar']; ?>" class="img-fluid" style="max-width:300px;" alt="...">
                             
                            <div class="input-group mb-3 mt-4">
                                <input type="file" class="form-control" id="gambar" name="gambar">
                                <label class="input-group-text" for="gambar">Upload</label>
                              </div>

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