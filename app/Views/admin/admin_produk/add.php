<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new image</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/img/ering.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Bootstrap 
          </a>
        </div>
    </nav>

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


    <footer class="text-center p-5" style="width: 100%;">
            
        <p>hakcipta terpelihara &copy; 2023</p>
        
        
    </footer>

</body>
</html>