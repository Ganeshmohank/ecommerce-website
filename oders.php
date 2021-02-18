<?php
require('top.inc.php');
    $username= $_SESSION['ADMIN_USERNAME'];
    $sqloder="SELECT *FROM oders where email_addresss ='$username'";
    $ode_req=mysqli_query($con,$sqloder);
    $reulstss=mysqli_fetch_all($ode_req,MYSQLI_ASSOC);
    if(isset($_POST['remove'])){
        $username=$_SESSION['ADMIN_USERNAME'];
        $del_Sql="DELETE FROM oders WHERE email_addresss='$username'";
        if(mysqli_query($con,$del_Sql)){
            header('location:oders.php');
        }else{
            echo "deletion fail";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oderspage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h2 class="text-center tit" >Order summary!</h2>
    <?php if(array_filter($reulstss)) {?>
    <?php foreach($reulstss as $result){?>
    <div class="container a1">
        <div class="row contese">
            <div class="col-s12-md6 final_product_grid_image">
                <a href="#" >
                    <img src= <?php echo  $result['image_url']?> class="img_oder_disp">
                </a>
            </div>
            <div class="w3-half prod_spec">
                <!--product name--><h6 class="text-center"><?php echo $result['product_name']?></h6>
                <!--seller--><h6 style="font-size:15px">seller:</h6>
                <!--size--><h6 style="font-size:20px">Size:<?php echo $result['product_size']?></h6>
                <!--qty--><h6 style="font-size:20px">qty:  <?php echo $result['qnty']?></h6>
                <!---RATTING--><p>Rating:3.4  ★★★</p>
                <!--p[rice3--><h6 class="pr1">price:<?php echo $result['price']?>₹/-</h6>
            </div>
        </div>
    </div>
    <?php }?>
        <div class=" rem">
            <form method="post">
                <div class="buton">
                    <button class="btn btn-outline-warning"type="submit" name="save_later">Save for later</button>
                    <button class="btn btn-outline-danger"type="submit" name="remove">Remove</button>
                </div>
            </form>
        </div>
    <?php
    $prices=$mrps=0;
    foreach($reulstss as $result){
        $prices+=$result['price'];
        $mrps+=$result['mrp'];
    }    
    ?>
    <div class="container nets ">
        <div class="s1-s12" >
            <div class="col-s6-md-6 nets2">
                <h6>MRP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del><?php echo $mrps?></del> ₹/-</h6>
                <h6>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prices?> ₹/-</h6>
                <h6>offer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo floor(100-($prices/$mrps)*100); echo "%" ?></h6>
                <h6 style="color: green;">Delivery charges&nbsp;<?php echo ($prices>990 ?'Free':$cod_charg=$prices*0.1); ?></h6>
                <h6>Net payable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prices+$cod_charg?> ₹/-</h6>
            </div>
            <div class="placeo">
                <button class="btn btn-dark" type="submit" name="placeoder">Place oder</button>
            </div>
        </div>
    </div>
    <?php }else{?>
        <h2 class="text-center" style="padding:20 30;">OOps Yourcart is empty<h2>
            <a class="btn" role="button "type="submit" href="mainpage.php" style="margin-left:650px;background-color:pink;padding:15px 20px;">Keep shopping</a> 
    <?php }?>
</body>
</html>
<style>
    .tit{
        padding:30px 30px;
        border:solid #fff 15px;
        background-color:#EDEDED;
        color:white;
        background-image: url("https://ignitecorp.com.au/public_html/clients/ignitecorp.com.au/wp-content/uploads/2018/11/umbrella-bg.jpg");

    }
    .pr1{
        padding-left:500px;
    }
    .rem{
        padding-left:450px;"
    }
    .final_product_grid_image{
        width:400px;
    }
    .buton{
        padding-top: 50px;
    }
    .placeo{
        padding-bottom: 20px;
    }
    .nets1{
        padding: 60px 60px;
    }
    .nets2{
        padding-top: 60px;
        margin-left:20px;
    }
    .nets{
        border: solid pink 3px;
        height:270px;
        
    }
    .img_oder_disp{
        width:70%;
        border-right:solid white 10px;
        padding:20px 50px;
    }
    .prod_spec{
        width:400px;
        padding-top:70px;
    }
    .prod_spec h6{
        font-size: 1.5em;
        font-weight: lighter;
    }
    .contese{
        background-color: #f2f7f4;
        border:solid white 5px ;
        box-shadow:  30px 30px 62px #494a50, 
             -30px -30px 52px #ffffff;
    }
    @media(max-width:767px){
        .rem{
            padding-left:60px;
        }
        .pr1{
            padding-left:160px;
        }
        .tit{
            padding:0px,0px;
            width:380px;
            border:solid white 10px;
        }
        .prod_spec{
            width:230px;
            padding-top:30px;
        }
        .product_spec h6{
            font-size:1.1em;
        }
        .final_product_grid_image{
            width:230px;
        }
        .img_oder_disp{
            width:95%;
            border-right:solid white 0px;
            padding-left:30px;
        }
        .a1{
            padding:10px 30px;
        }
        .contese{
            border-bottom: solid white 10px;
        }
    }
</style>