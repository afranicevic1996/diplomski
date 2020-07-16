<!DOCTYPE html>
<html lang="en">
<head>
  <title>eTrgovina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f739741657.js" crossorigin="anonymous"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    a:hover {text-decoration: none;}
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>eTrgovina</h1>      
    <p>Želimo vam sretnu i sigurnu kupnju
    <?php if(session()->has('username')): ?>
      <?php echo e(session()->get('username')); ?>

    <?php endif; ?>

    !</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Početna</a></li>
        <li><a href="#">O nama</a></li>
        <li><a href="#">Uvjeti poslovanja</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Prijava</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>-->
      <?php if(!session()->has('username')): ?>
        <li><a href="/login">Prijava</a></li>
        <li><a href="/register">Registracija</a></li>
      <?php endif; ?>

      <?php if(session()->has('username')): ?>
        <li><a href="/editProfil"><span class="glyphicon glyphicon-user"></span> Uredi profil (<?php if(session()->has('username')): ?><?php echo e(session()->get('username')); ?><?php endif; ?>)</a></li>
        <li><a href="/logout">Odjava</a></li>
      <?php endif; ?>
      </ul>
    </div>
</nav>


<div class="container"> 
 <div class="row">
   <div class="col-sm-2"></div>
   <div class="col-sm-8">
	<div class="container-fluid text-center">
		<p>Upišite pojam za pretragu:</p>  
			  <form class="form-inline">
			    <input type="email" class="form-control" size="50" placeholder="Pretražite">
			    <button type="button" class="btn btn-primary">Traži</button>
			  </form>
			</div>
   </div>
   <div class="col-sm-2"></div>
 </div>
</div><br><br><br>



<div class="container">      
  <div class="row">
    <div class="col-sm-4">
      <a href="#">
      	<div class="panel panel-primary">
        	<div class="panel-heading">Motorna vozila</div>
        	<div class="panel-body"><center><i class="fas fa-car fa-9x"></i></center></div>
        	<div class="panel-footer">Automobili, motocikli, dostavna vozila, ...</div>
      	</div>
      </a>
    </div>
    <div class="col-sm-4">
     <a href="#">
      <div class="panel panel-primary">
        <div class="panel-heading">Informatika</div>
        <div class="panel-body"><center><i class="fas fa-desktop fa-9x"></center></i></div>
        <div class="panel-footer">Računala, laptopi, televizori, ...</div>
      </div>
     </a>
    </div>
    <div class="col-sm-4">
     <a href="#">
      <div class="panel panel-primary">
        <div class="panel-heading">Nekretnine</div>
        <div class="panel-body"><center><i class="fas fa-home fa-9x"></center></i></div>
        <div class="panel-footer">Kuće, stanovi, zemljišta, ...</div>
      </div>
     </a>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
     <a href="#">
      <div class="panel panel-primary">
        <div class="panel-heading">Mobiteli</div>
        <div class="panel-body"><center><i class="fas fa-mobile-alt fa-9x"></center></i></div>
        <div class="panel-footer">Sve vrste mobitela</div>
      </div>
     </a>
    </div>
    <div class="col-sm-4">
     <a href="#"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Odjeća</div>
        <div class="panel-body"><center><i class="fas fa-tshirt fa-9x"></center></i></div>
        <div class="panel-footer">Sve vrste odjeće</div>
      </div>
     </a>
    </div>
    <div class="col-sm-4"> 
     <a href="#">
      <div class="panel panel-primary">
        <div class="panel-heading">Ostalo</div>
        <div class="panel-body"><center><i class="fas fa-box-open fa-9x"></center></i></div>
        <div class="panel-footer">Svi ostali proizvodi</div>
      </div>
     </a>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Prijavite se na naš newsletter</p>  
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Adresa">
    <button type="button" class="btn btn-primary">Pošaljite</button>
  </form>
</footer>

</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\Diplomski\resources\views/welcome.blade.php ENDPATH**/ ?>