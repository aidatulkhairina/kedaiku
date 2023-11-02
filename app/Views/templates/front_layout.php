
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
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/ering.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Bootstrap 
        </a>
      <ul class="navbar-nav">
      <li class="nav-item">
                <a class="nav-link" href="/bakul">Cart </a>
            </li>
      </ul>
  </div>
</nav>

    
    <?= $this->renderSection('hero') ?>


    <div class="container mt-5">
        
        <?= $this->renderSection('main-content') ?>
    
    
    </div>

       
        <footer class="text-center p-5 mt-5">
            <p>hakcipta terpelihara &copy; 2023</p>
        </footer>

    
</body>
</html>