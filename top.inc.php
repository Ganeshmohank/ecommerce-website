<?php
error_reporting(0);
include('conection.inc.php');
$username=$_SESSION['ADMIN_USERNAME'];
$SQLI="SELECT firstname FROM users where email ='$username'";
    $ode_req=mysqli_query($con,$SQLI);
    $reulstss=mysqli_fetch_array($ode_req,MYSQLI_ASSOC);
if($_SESSION['ADMIN_USERNAME']){
}
else{
  header('location:login.php');
}
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>PRODO</title>
    <link rel="stylesheet" href="style_ecopage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <body class="bodys">
    <nav id="navccer" class="navbar navbar-dark navbar-expand-lg bg-light">
        <a class="navbar-brand" style="color:black" href="mainpage.php">
          PRODO
        </a>
        <button style="height:30px;color:black;border:solid grey 1px"class="navbar-toggler" data-toggle="collapse"data-target="#collapser"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="collapser">
        <ul class="navbar-nav ml-auto">
          <div id="sear"style="padding-top:8px;padding-right:100px">
          <input id="intsear" class="sera"type="text">
            <button style="box-shadow: 12px 12px 24px 0 rgba(0, 0, 0, 0.2),
    -12px -12px 24px 0 rgba(255, 255, 255, 0.5);">
            <i class="fas fa-search" style="height:20px;padding-top:3px;"></i>
            </button>
          </div>
            <li class="nav-item stylo" >
            <a href="#"class="nav-link"style="color:black">
                  Hello! <?php foreach($reulstss as $product){
      echo $product;
  }?>
                </a>
            </li>
            <li class="nav-item " >
                <a href="mens.php"class="nav-link" style="color:black;font-weight:bold;">
                    Men's
                </a>
            </li>
            <li class="nav-item" >
                <a href="#"class="nav-link" style="color:black;font-weight:bold;">
                    Accessories
                </a>
            </li>
            <li class="nav-item">
              <a href="#"class="nav-link" style="color:black;font-weight:bold;">
                  Shoes
              </a>
            </li>
            <li class="nav-item">
              <a href="oders.php" class="nav-link" style="color:black;font-weight:bold;">
              <i class="fas fa-shopping-cart" style="height:20px;padding-top:5px;"></i>
              <label class="a2">cart</label>
              </a>
          </li>            
            <li class="nav-item" name="logout">
              <a href="logout.php"class="nav-link" style="color:black;font-weight:bold;">
                  Signout
              </a>
            </li>
        </ul>
        </div>
    </nav>
    <style>
      .sera{
        box-shadow: 12px 12px 24px 0 rgba(0, 0, 0, 0.2),
    -12px -12px 24px 0 rgba(255, 255, 255, 0.5);width:280px 
      }
      .cart_Sy{
        height:80%;
        padding-right:30px;
        padding-bottom:10px;
      }
      .stylo{
        padding-right:280px;
        color:black;
        font-size:18px;
        font-weight:Bold;
      }
      .a2I{
        visibility="hidden";
      }
      @media(max-width:767px){
        .sera{
          width:200px;
        }
        .stylo{
          padding-right:20px;
          padding-top:5px;
        }
        .a2I{
          visibilty:"visible";
        }
      }
    </style>
  </head>
<?php
error_reporting(0);
?>