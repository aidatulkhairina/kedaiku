<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/admin.css">

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
        <div class="row">
            <div class="col-12">
                <h3>Senarai Gambar</h3>
                <a href="/gambar/add/" class="btn btn-primary btn-sm float-end">Add New</a>
            </div>

            <div class="col-12">
                <table class="table table-light table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Desc</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($gambar as $g) { ?>
                        <tr>
                            <td><?= $g['id'] ?></td>
                            <td><img src="/img/<?= $g['nama_file'] ?>" alt="" width="130" height="90"></td>
                            <td><?= $g['nama'] ?></td>
                            <td>
                                <a href="/gambar/edit/<?= $g['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/gambar/delete/<?= $g['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- pagination-->
        <div class="row p-2">
        </div class="col">
            <nav aria-label="Page navigation example">
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
            </nav>
        </div>

        <footer class="text-center p-5">
            <p>hakcipta terpelihara &copy; 2023</p>
        </footer>

    </div>
    </div>
</body>
</html>