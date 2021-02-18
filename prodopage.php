<?php
$sel_size='';
require('top.inc.php');
if(isset($_GET['productid'])){
    $id=mysqli_real_escape_string($con,$_GET['productid']);
    $sql="SELECT * FROM product WHERE productid='$id'";
    $result=mysqli_query($con,$sql);
    $product=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    $username= $_SESSION['ADMIN_USERNAME'];
}
if(isset($_POST["cart"])){
    $name=$_POST['sel_sizes'];
    $qty=$_POST['sel_qty'];
    $img=$product['image'];
    $productid=$product['product_name_id'];
    $productname=$product['productid'];
    $mrp=$qty*$product['mrp'];
    $price=$qty*$product['price'];
    $sql_upd="INSERT INTO oders(product_size ,productid,price,qnty,email_addresss,product_name,image_url,mrp) VALUES('$name','$productid','$price','$qty','$username','$productname','$img',$mrp)";
    if(!mysqli_query($con,$sql_upd)){
       
        echo "db REFUSDED TO CONNECT";
     }                             

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productpage</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-s12-md6 boxer">
            <a href="#">
                <img src=<?php echo $product['image']?> class="pro_img">
            </a>
            <br>
            <h6 class="text-center"><?php echo $product['brand']?></h6>
            <h5 class="text-center">price:<del><?php echo $product['mrp']?></del> @ ₹<?php echo $product['price']?></h5>
        </div>
        <div class="col-s12-md-6 details_grid">
            <h6 class="text-center"><?php echo $product['productid']?></h6>
            <div style="font-weight:2em;font-size:30px;">Standard</div>
            <ul>
                <li><h6><?php echo $product['short_desc'] ?></h6></li>
                <li><h6><?php echo $product['description'] ?></h6></li>
            </ul>
            <br>
        </div>
    </div>
    <br><br>
    <div class="row">
            <div class="col-3">
                <form method = "POST" action = "<?php $_PHP_SELF ?>">
                    <label class="sel1">Size</label>
                    <div class="form-group"style="width:80px;padding-right:5px">
                        <select class="form-control" id="sel_size" name="sel_sizes" >
                            <?php foreach(explode(',',$product['size']) as $sizes) { ?>
                                <option><?php echo $sizes?></option>
                                <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <label class="sel1">Add Items</label>
                    <div class="form-group"style="width:70px;"  >
                        <select class="form-control" name="sel_qty" >
                            <?php for($i=1;$i<10;$i++) { ?>
                                <option><?php echo $i?></option>
                                <?php }?>
                        </select>
                    </div>
                </div>
                    <div class="w3-half buttonss">
                        <a  class="btn btn-warning btio btn-sm"style="padding-left:40px;padding-right:40px;" type="submit" href="oders.php?username=<?php echo $username;?>" name="cart" >Go to cart</a>
                        <button   class="btn btn-sucea btio btn-sm" type="submit" name="cart" >Add to cart</button>
                    </div>
                </form>
            </div>
    </div>
</div>
</body>
    
</html>
<style>
        .sel1{
            padding-left:10px;
        }
        .pro_img{
            width:300px;height:300px;object-fit:contain;
        }
        .btio{
            background-color:yellow !important;
            text-align:center;
            padding-top:10px;
            padding-bottom:10px;
        }
        h6{
            padding-top:20px;
        }
        .container{
            padding-left:60px;
            padding-top:30px;
            padding-bottom:30px;
        }
        .boxer{
            box-shadow:  41px 41px 82px #494a50, 
             -41px -41px 82px #ffffff;
            padding-bottom: 60px;
            padding-top: 60px;
            height:500px;
            
        }
        .details_grid{
          
            padding-left:60px;
            padding-right: 60px;
            width:550px;
        }
        .btn-sucea{
            background-color:#fb641b !important;
            padding-left:30px;
            padding-right:40px;
            text-align:center;
        }
        .buttonss{
            padding-bottom:20px;
            right:100px;
        }
        @media(max-width:767px;){
            .container{
                padding-left:0px;
            }
            .details_grid{
                width:300px;
            }
            .boxer{
                border:solid black 5px;
            }
        }
    </style>
<?php
include('footer.inc.php');
?>