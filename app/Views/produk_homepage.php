<?php $this->extend('templates/front_layout') ?>

<?php $this->section('hero') ?>

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
      
<?php $this->endSection() ?>


<?php $this->section('main-content') ?>

      <div class="row mt-5">
        <div class="col text-center">
            <h1>Senarai Produk</h1>
        </div>
      </div>

    <div class="container mt-3 pb-3 ">
    <?php if(isset($_SESSION['success'])){ ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> Your item has been added to <a href="/bakul">cart</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            

            <?php foreach($produk as $p){ ?>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
    <div class="card">
        <img src="/img/<?php echo $p['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <p>
              <span class="badge text-bg-info"><?= $kategori[$p['kategori_id']] ?></span>
            </p>
            <h5 class="card-title"><?php echo $p['nama'] ?></h5>
            <p class="card-text"><?php echo $p['description'] ?></p>
            <p class="card-text">
                <strong>Harga: RM</strong>
                <?php echo number_format($p['harga'], 2) ?>
            </p>

            <div class="row align-items-center">
                <form class="col-8" action="/bakul/add" method="post">
                    <input type="hidden" name="produk_id" value="<?= $p['id'] ?>">
                    <div class="input-group">
                        <input type="number" name="qty" value="1" class="form-control">
                        <button type="submit" class="btn btn-primary" >Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


           <?php } ?>
        </div>
            
        
    </div> 
    <div id="my-pagination">
            <?= $pager->links() ?>
        </div>
       
<?php $this->endSection() ?>