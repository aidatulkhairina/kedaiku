<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootsttrap</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
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

      <div class="hero-area">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1>KelasProgramming.com</h1>
                    <p>Pengenalan bootstrap</p>
    
                </div>
               
            </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
            <h1>Gallery</h1>
        </div>
      </div>

    <div class="container mt-3 pb-5">
        <div class="row">
            

            <?php foreach($all_pekan as $pekan){ ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="/img/<?php echo $pekan->nama_file; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $pekan->nama ?></h5>
                      <p class="card-text"><?php echo $pekan->description ?></p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
            
        <!-- pagination-->
        <!-- <div class="row p-5">
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
            </div>-->
    </div> 

       
        <footer class="text-center p-5">
            <p>hakcipta terpelihara &copy; 2023</p>
        </footer>

    
</body>
</html>