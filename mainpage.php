<?php
require('top.inc.php');
if($_SESSION['ADMIN_USERNAME']){
}
else{
  header('location:login.php');
}
$sql_prodouct='SELECT * FROM 	product';
$result_product=mysqli_query($con,$sql_prodouct);
$fetch_product=mysqli_fetch_all($result_product,MYSQLI_ASSOC);
mysqli_free_result($result_product);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>prodo</title>
  <html>
        <div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="https://cdn.shopify.com/s/files/1/0154/4703/1862/collections/bannerxl51eghjk_1200x1200.jpg?v=1558209999" class="d-block w-100 image " alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://s4.thingpic.com/images/7i/n4rsXPHx7THt1GVmiq3U6KgX.jpeg" class="d-block w-100 image " alt="">
              </div>
              
              <div class="carousel-item">
                <img src="https://storage.sg.content-cdn.io/in-resources/21e9ae3c-de72-4391-9c4a-c7af58447630/Images/userimages/home-page-banner/eoss/levis-philippines-end-of-season-sale_desktop.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://storage.sg.content-cdn.io/in-resources/8d757d40-6065-42bb-9044-c8a5073cfb70/Images/userimages/homepage/SLIDE-BANNER/eoss/levis-hongkong_end-of-season-sale-final_Home_ENG_Desktop.gif" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/fc/bc/d5/fcbcd523912e29ba8acbe4986be2fe90.jpg" class="d-block w-100 image " alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          <h2 class="text-center" style="padding-top:20px;">Featured!</h2>
          <h2 style="padding:20px 20px">kindly visit mens page... this page is under construction</h2>
        <!-- <section class="container2">
            <div class="row">
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/cycle image.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center">an cycle</h1>
                <h2 class="text-center">price 50$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/headphone.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center">Ptron headphones</h1>
                <h2 class="text-center">price 20$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/macbook.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center">Apple macbook</h1>
                <h2 class="text-center">price 105$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/pottery.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center">clay-pots</h1>
                <h2 class="text-center">price 10$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/shoes.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center"> shoes</h1>
                <h2 class="text-center">price 50$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
              <div class="col-2 product-grid-2">
                <a href="#" >
                  <img src="imgs/watch.jpg" class="imgsec-2">
                </a>
                <h1 class="text-center">Armani watch</h1>
                <h2 class="text-center">price 50$</h2>
                <a class="btn btn-success btn-sm" href="#" role="button">Add to cart</a>
              </div>
        </section> -->
        <br><br><br>
        <h2 class="text-center" style="padding-bottom:20px;">Latest arivals!</h2>

    </body>
    <style>
     @media(max-width:767px){
       .carousel{
         height:150px;
       }
      .image{
         height:150px;
       }
     }
      
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
<?php
require('footer.inc.php');
?>