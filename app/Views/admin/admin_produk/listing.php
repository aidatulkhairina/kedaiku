<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/admin.css">

</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/ering.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Bootstrap 
          </a>
        </div>
    </nav>

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
            <div class="col-12">
                <h3>Senarai Produk</h3>
                <a href="/produk/add/" class="btn btn-primary btn-sm float-end">Add New</a>
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

        
        <!-- pagination-->
        


                <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </ul>
            
            </nav> -->
            
    </div>

        <footer class="text-center p-5">
            <p>hakcipta terpelihara &copy; 2023</p>
        </footer>

<script>
    function confirm_delete(id){
        if(confirm('Are your sure to delete record ID '+id+'?')){
            window.location.href = '/produk/delete/'+id;
        }
        
    }
</script>

</body>
</html>