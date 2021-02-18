<?php
require('top.inc.php');
$sql='SELECT *FROM product';
$result=mysqli_query($con,$sql);
$men_pros=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mens</title>
</head>
<body>
<div id="carouselExampleInterval" class="carousel" data-ride="carousel">
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="https://static-ph.zacdn.com/cms/flagshipstore/brands/20180913_riverisland_carousel_996x350_men-1.jpg" class="d-block w-100 image " alt="...">
              </div>
              <div class="carousel-item" >
                <img src="https://static-hk.zacdn.com/cms/flagshipstore/brands/20180913_riverisland_carousel_996x350_men-2.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://ssl.quiksilver.com/static/RV/default/category-assets/experiences/2019/hero-carousel/img/singles/us/ptc-tes-homepage-desktop-1440x614.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/42/2a/96/422a9607d5a6e13d28b66af569c7188e.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://storage.sg.content-cdn.io/in-resources/21e9ae3c-de72-4391-9c4a-c7af58447630/Images/userimages/home-page-banner/eoss/levis-philippines-end-of-season-sale_desktop.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://i0.wp.com/www.franolaxy.com/wp-content/uploads/2018/10/adidas-banner.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/fc/bc/d5/fcbcd523912e29ba8acbe4986be2fe90.jpg" class="d-block w-100 image " alt="">
              </div>
              <div class="carousel-item">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/shoes/March/SPW/Puma/menwmn-combinedsale-banner._CB467757019_.jpg" class="d-block w-100 image " alt="">
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
<div class="container contt">
        <div class="w3-row">
            <?php 
            foreach($men_pros as $pros){ ?>
                <div class="w3-quarter w3-container product_grids">
                    <a href="#">
                        <img  src= <?php echo $pros['image'] ?> class="product_img_size">
                    </a>
                    <div class="porhov text-center">
                    <h2><?php echo htmlspecialchars($pros['brand'])?></h2>
                    <h2><?php echo htmlspecialchars($pros['categories']); ?></h2>
                    <h1 style="color:red">Price:<del><?php echo htmlspecialchars($pros['mrp']);?></del> just@ <?php echo htmlspecialchars($pros['price']);?></h1>
                    <h1 style="color: green;"> offer <?php echo floor(100-($pros['price']/$pros['mrp'])*100)?>%</h1>
                    <a role="button" class="btn btn-dark" href="prodopage.php?productid=<?php echo $pros['productid']?>">view</a>
                    </div>
                </div>
           <?php } ?>
        </div>
    </div>
</body>

</body>
<br><br><br>
<?php
require('footer.inc.php');
?>
<style>
    .contt{
        padding-top:20px;
    }
    .btn{
        margin-left:140px;
        padding-left:15px;
        padding-right:15px;

    }
    .product_img_size{
        width:100%;
        height:220px;
        object-fit:contain;

        padding-bottom: 10px;
        padding-top: 10px; 

    }
    .product_grids{
        box-sizing: border-box;
        padding-top:20px;
        padding-bottom:20px;
        border:1px solid white;
        
    }
    .product_grids h1{
        font-size:90%;
        padding-left: 15px;
    }
    .product_grids h2{
        font-size: 95%;
        padding-left: 15px;
    }
    .porhov{
        padding-top: 20px;
    }
    .product_grids:hover {
      box-shadow: 6px 6px 14px 0 rgba(0, 0, 0, 0.2),
    -8px -8px 18px 0 rgba(255, 255, 255, 0.55);
    }
    @media(max-width:767px){
      .carousel{
        height:150px;
      }
      .image{
        height:150;
      }
    }

</style>    
</html>