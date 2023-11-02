<?php $this->extend('templates/admin_layout') ?>

<?php $this->section('main-content') ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h3><a href="/produk" class="btn btn-sm btn-danger">Cancel</a> Add new image</h3>
                <hr>
                <?php echo form_open_multipart('produk/add') ?>
                <form class="mb-5">
                    
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" >
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" rows="3" name="description" placeholder="tulis sesuatu..."></textarea>

                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <img src="https://placehold.co/200x100/000000/FFFFFF/png" class="img-fluid" alt="...">
                             
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

<?php $this->endSection() ?>