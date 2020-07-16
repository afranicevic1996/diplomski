<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://kit.fontawesome.com/f739741657.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<div class="jumbotron">
  <div class="text-center text-light">
    <h1>eTrgovina</h1>      
    <p class="text-light">Želimo vam sretnu i sigurnu kupnju!</p>
  </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Početna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/oNama">O nama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/uvjetiKoristenja" tabindex="-1">Uvjeti poslovanja</a>
      </li>
    </ul>
    <?php if(!session()->has('username')): ?>
      <a class="btn btn-outline-secondary btn-round" href="/login" role="button">Prijava</a>&nbsp;
      <a class="btn btn-outline-danger btn-round" href="/register" role="button">Registracija</a>
    <?php endif; ?>

    <?php if(session()->has('username')): ?>
      <a class="btn btn-outline-success btn-round" href="/cart" role="button"><i class="fas fa-shopping-cart"></i> Košarica (<?php echo e(count(session()->get('kosarica'))); ?>)</a>&nbsp;
      <a class="btn btn-outline-secondary btn-round" href="/editProfil" role="button">Uredi profil (<?php if(session()->has('username')): ?><?php echo e(session()->get('username')); ?><?php endif; ?>)</a>&nbsp;
      <a class="btn btn-outline-danger btn-round" href="/logout" role="button">Odjava</a>
    <?php endif; ?>
  </div>
</nav>

<div class="container">    
    <div class="row">

        <div class="col-lg-12">

          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <?php $i = 0; ?>
              <?php $__currentLoopData = $info['slike']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slika): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$i++): ?>
                  <div class="carousel-item active">
                    <img src='<?php echo e(URL::asset("$slika->fileName")); ?>' class="d-block w-100" alt="...">
                  </div>                  
                <?php else: ?>
                  <div class="carousel-item">
                    <img src='<?php echo e(URL::asset("$slika->fileName")); ?>' class="d-block w-100" alt="...">
                  </div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <hr>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($info['naziv']); ?></h5>
              <p class="card-text"><?php echo e($info['cijena']); ?>Kn</p>
              <?php if($info['dostupnost'] == 1): ?>
                <p style="width: 100px;">
                  <input id="kolicina" name="kolicina" type="number" min="1" oninput="validity.valid||(value='');" value="1" placeholder="Količina" class="form-control item<?php echo e($info['id']); ?>">
                </p>
              <?php else: ?>
                <p style="width: 100px;">
                  <input id="kolicina" name="kolicina" type="number" min="1" oninput="validity.valid||(value='');" value="1" placeholder="Količina" class="form-control item<?php echo e($info['id']); ?>" disabled>
                </p>
              <?php endif; ?> 

              <?php if($info['dostupnost'] == 1): ?>
                <form style="display: inline;" action="/addToCart/<?php echo e($info['id']); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" id="item<?php echo e($info['id']); ?>" name="kolicina" value="1">
                  <input type="hidden" name="cijena" value="<?php echo e($info['cijena']); ?>">
                  <button title="" id="kupi<?php echo e($info['id']); ?>" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fas fa-shopping-cart"></i></button>
                </form>
              <?php else: ?>
                <a title="" href="" class="btn btn-outline-success disabled" data-toggle="tooltip" data-original-title="Add to cart"> <i class="fas fa-shopping-cart"></i></a>
              <?php endif; ?>
              <?php if(session()->has('username')): ?>
                <?php if($info['wishlistCheck'] == 1): ?>
                  <button title="" class="btn btn-outline-secondary disabled" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="far fa-heart"></i></button>
                <?php else: ?>
                  <form style="display: inline;" action="/addToWish/<?php echo e($info['id']); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button title="" class="btn btn-outline-secondary" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="far fa-heart"></i></button>
                  </form>
                <?php endif; ?>
              <?php else: ?>
                <a title="" href="" class="btn btn-outline-secondary disabled" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="far fa-heart"></i></a>
              <?php endif; ?>
            </div>
          </div>
          <hr>
        <!-- /.card -->


        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Specifikacije</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
              Ocjene 
              <?php if($info["komentari"] == 0): ?>
                (0)
              <?php else: ?>
                (<?php echo e(count($info["komentari"])); ?>)
              <?php endif; ?>
            </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php echo e($info['opis']); ?></div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <?php if($info["komentari"] == 0): ?>
            <p>Ovaj proizvod nema ocjena!</p>
          <?php else: ?> 
            <?php $__currentLoopData = $info["komentari"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komentar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <br>
              <div class="card">
                <div class="card-header">
                  Napisao korisnik: <?php echo e($komentar->username); ?>

                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p style="font-size: 14px;"><?php echo e($komentar->komentar); ?></p>
                    <footer class="blockquote-footer">
                      <?php for($i = 1; $i <= 5; $i++): ?>
                        <?php if($i <= $komentar->ocjena): ?>
                          <span class="fa fa-star checked"></span>
                        <?php else: ?>
                          <span class="fa fa-star"></span>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </footer>
                  </blockquote>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>


          </div>
        </div>



        </div>
        <hr><br>
    </div>

</div>

<br><br><br><br><br>

</body>

<script>

  $(document).ready(function(){
    $("button").click(function(){
      var buttonID = $(this).attr('id');
      buttonID = buttonID.replace(/[^0-9]/g,'');
      var kolicina = $("#kolicina").val();

      $("#item"+buttonID).val(kolicina);
    });
  });

</script>
<style>
body{
  font-family: 'Barlow Condensed', sans-serif;
}

.fa-star{
  font-size: 12px;
}

.checked {
  color: orange;
}
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    a:hover {text-decoration: none;}
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   

    .jumbotron {
      background: url("<?php echo e(URL::asset('shop.jpg')); ?>") no-repeat;
    }

.carousel-inner{
  width:100%;
  max-height: 600px !important;
}

.carousel-control-next-icon,
.carousel-control-prev-icon {
  filter: invert(1);
}

.blue{
  background-color: #292b2c;
}
</style>
</html><?php /**PATH C:\xampp\htdocs\Diplomski\resources\views/product.blade.php ENDPATH**/ ?>