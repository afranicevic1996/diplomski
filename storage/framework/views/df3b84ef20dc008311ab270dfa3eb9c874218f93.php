<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a class="nav-link" href="#">O nama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">Uvjeti poslovanja</a>
      </li>
    </ul>
    <?php if(!session()->has('username')): ?>
      <a class="btn btn-outline-secondary btn-round" href="/login" role="button">Prijava</a>&nbsp;
      <a class="btn btn-outline-danger btn-round" href="/register" role="button">Registracija</a>
    <?php endif; ?>

    <?php if(session()->has('username')): ?>
      <a class="btn btn-outline-secondary btn-round" href="/editProfil" role="button">Uredi profil (<?php if(session()->has('username')): ?><?php echo e(session()->get('username')); ?><?php endif; ?>)</a>&nbsp;
      <a class="btn btn-outline-danger btn-round" href="/logout" role="button">Odjava</a>
    <?php endif; ?>
  </div>
</nav>

<div class="container">
 <div class="row">
  <div class="col-lg-12">

    <form id="forma" enctype="multipart/form-data" method="POST" action="">
      <?php echo csrf_field(); ?>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ime">Naziv</label>
          <input id="ime" name="ime" type="text" value="" placeholder="Ime" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="cijena">Cijena</label>
          <input id="cijena" name="cijena" type="text" value="" placeholder="Cijena" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="dostupnost">Dostupnost</label>
          <select name="dostupnost" class="browser-default custom-select">
            <option selected value="1">Dostupno</option>
            <option value="0">Nedostupno</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="opis">Opis proizvoda</label>
          <textarea id="opis" name="opis" class="form-control" rows="3" required></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" name="slike[]" class="form-control-file" id="exampleFormControlFile1" multiple required>
        </div>
      </div>
      <button type="submit" id="save" name="save" class="btn btn-outline-primary">Spremi</button>
    </form>
  </div>
 </div>
</div>

</body>
<style>

    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   

    .jumbotron {
      background: url("<?php echo e(URL::asset('shop.jpg')); ?>") no-repeat;
    }

footer{
  background-color: #292b2c;
}
</style>
</html>

<?php /**PATH D:\XAMPP\htdocs\Diplomski\resources\views/addProduct.blade.php ENDPATH**/ ?>