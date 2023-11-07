<?php $this->extend('templates/admin_layout') ?>

<?php $this->section('main-content') ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h3><a href="/kategori" class="btn btn-sm btn-danger">Cancel</a> Add new kategori</h3>
                <hr>
                <?php echo form_open_multipart('/kategori/add') ?>
                <form class="mb-5">
                    
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                        </div>
                    </div>

                
                      
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
            
              
        </div>
    </div>


</body>
</html>

<?php $this->endSection() ?>