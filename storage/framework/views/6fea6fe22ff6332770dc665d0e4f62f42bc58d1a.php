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

    .jumbotron {
      background: url("<?php echo e(URL::asset('shop.jpg')); ?>") no-repeat;
    }
  </style>
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
      <li class="nav-item active">
        <a class="nav-link" href="/">Početna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">O nama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">Uvjeti poslovanja</a>
      </li>
    </ul>
      <a class="btn btn-outline-secondary btn-round" href="/login" role="button">Prijava</a>&nbsp;
      <a class="btn btn-outline-danger btn-round" href="/register" role="button">Registracija</a>
  </div>
</nav>

<div class="container">    
    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
          <br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/" target="_blank"> Bootstrap-ecommerce.com</a></p>
<hr>



<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Proizvod</th>
  <th scope="col" width="120">Raspoloživost</th>
  <th scope="col" width="150">Cijena</th>
  <th scope="col" width="200" class="text-right"></th>
</tr>
</thead>
<tbody>
<tr>
  <td>
<figure class="media">
  <div class="img-wrap"><img src="https://via.placeholder.com/120" class="img-thumbnail img-sm" style="margin-right: 5px"></div>
  <figcaption class="media-body">
    <h6 class="title text-truncate">Product name goes here</h6>
    <dl class="param param-inline small">
      <dt>Size: </dt>
      <dd>XXL</dd>
    </dl>
    <dl class="param param-inline small">
      <dt>Color: </dt>
      <dd>Orange color</dd>
    </dl>
  </figcaption>
</figure> 
  </td>
  <td>
    <i class="fas fa-check text-success"></i>
  </td>
  <td> 
    <div class="price-wrap"> 
      <var class="price">149.99 Kn</var> <br>
      <small class="text-muted">(+30kn poštarina)</small> 
    </div> <!-- price-wrap .// -->
  </td>
  <td class="text-right"> 
  <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fas fa-shopping-cart"></i></a> 
  <a href="/product" class="btn btn-outline-secondary btn-round">Detalji <i class="fas fa-arrow-right"></i></a>
  </td>
</tr>
<tr>
  <td>
<figure class="media">
  <div class="img-wrap"><img src="https://via.placeholder.com/120" class="img-thumbnail img-sm"></div>
  <figcaption class="media-body">
    <h6 class="title text-truncate">Product name goes here </h6>
    <dl class="param param-inline small">
      <dt>Size: </dt>
      <dd>XXL</dd>
    </dl>
    <dl class="param param-inline small">
      <dt>Color: </dt>
      <dd>Orange color</dd>
    </dl>
  </figcaption>
</figure> 
  </td>
  <td> 
    <i class="fas fa-times text-danger"></i>
  </td>
  <td> 
    <div class="price-wrap"> 
      <var class="price">759.00 Kn</var><br>
      <small class="text-muted">(+30kn poštarina)</small> 
    </div> <!-- price-wrap .// -->
  </td>
  <td class="text-right"> 
  <a title="" href="" class="btn btn-outline-success disabled" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fas fa-shopping-cart"></i></a> 
  <a href="/product" class="btn btn-outline-secondary btn-round">Detalji <i class="fas fa-arrow-right"></i></a>
  </td>
</tr>
<tr>
  <td>
<figure class="media">
  <div class="img-wrap"><img src="https://via.placeholder.com/120" class="img-thumbnail img-sm"></div>
  <figcaption class="media-body">
    <h6 class="title text-truncate">Product name goes here </h6>
    <dl class="param param-inline small">
      <dt>Size: </dt>
      <dd>XXL</dd>
    </dl>
    <dl class="param param-inline small">
      <dt>Color: </dt>
      <dd>Orange color</dd>
    </dl>
  </figcaption>
</figure> 
  </td>
  <td> 
    <i class="fas fa-check text-success"></i>
  </td>
  <td> 
    <div class="price-wrap"> 
      <var class="price">1048.00 Kn</var> <br>
      <small class="text-muted">(besplatna poštarina)</small> 
    </div> <!-- price-wrap .// -->
  </td>
  <td class="text-right"> 
    <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fas fa-shopping-cart"></i></a> 
    <a href="/product" class="btn btn-outline-secondary btn-round">Detalji <i class="fas fa-arrow-right"></i></a>
  </td>
</tr>
</tbody>
</table>
</div> <!-- card.// -->

</div> 
        <hr>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
</div>
</body>

<script>

  $(document).ready(function(){
    $("#resetPolja").click(function(){
      $("#username").val('');
      $("#password").val('');
    });
  });
</script>
</html><?php /**PATH D:\XAMPP\htdocs\Diplomski\resources\views/products.blade.php ENDPATH**/ ?>