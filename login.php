<?php
require('conection.inc.php');
$msg='';
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
    $sqls="SELECT * FROM users WHERE email='$username' AND pass='$password'";
    /* $sqlpost="INSERT INTO oders(email_addresss) VALUES('$username')"; */ 
	$result=mysqli_query($con,$sqls);
    $count=mysqli_num_rows($result);
	if($count>0){
		$_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']=$username;
		header('location:mainpage.php');
		die();
	}else{
        $msg="Please enter correct login details";
        	
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <div >
        <h2 class="di">®PRODO</h2>
    </div>
    <div class="container">
    <div class="row">
    <div class="col">
                    <form class="foer w3-half" method="POST">
                        <div class="form-group">
                          <label class="mag" for="exampleInputEmail1">Username</label>
                          <input type="text" name="username"class="form-control" placeholder="@mail.com" >
                          <small id="vals" style="color: red; visibility: hidden;" >Invalid-emails</small>
                        </div>
                        <div class="form-group ">
                          <label class="mag" for="exampleInputPassword1">Password</label>
                          <input  type="password" name="password"class="form-control">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                          <label class="form-check-label" for="exampleCheck1"name="check">Terms and conditions</label>
                        </div>
                        <div class="row w3-half d2">
                            <div class="col">
                                <button class="btn btn-success" name="submit" role="button">Login</button>                                
                            </div>
                        </div>
                        <div class="fails">
                        <?php echo $msg; ?>
                        </div>
                    </form>
    </div>
    <div class="col coli2">
        <a class="btn btn-primary" href="signup.php" role="button">signup</a>
    </div>
    </div>
    
    </div>
    </body>
    
</html>
<style>
.coli2{
    margin-left:10px;
}
body
{
    background-color:smokewhite;
}
label{
    color:solid black;
}
.di{
    opacity:80%;
    padding-left:500px;
    font-size:4em;
    color:grey
}
.foer{
    padding: 30px;
    box-sizing: border-box;
    width:450px;
    height:350px;
    border-radius: 30px;
background: #4834DF;
box-shadow:  7px -7px 14px #2f2291, 
             -7px 7px 14px #6146ff;
    position:relative;
    top: 11vh;
    font-weight:900;
    font-size:20px;
    color:white;
    
}
.d2{
    padding-left:200px;
}
.fails{
    color:red;
    font-weight:1.2em;
    padding:50px,25px;

}
.logs{
    padding-left:500px;
    font-size:4em;
    color:white;
}
@media(max-width:767px){
   .di{
       padding-left:80px;
       font-size:3em;
       padding-top:35px;
   }
   .foer{
       width:320px;
       height:350px;
       font-size:15px;
   }
   .c1{
       padding-left:30px;
       padding-top:50px;
   }
   .d2{
       padding-left:10px;
   }
    
}


</style>