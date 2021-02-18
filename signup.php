<?php

	include('conection.inc.php');

	$email = $lastname = $firstname = $password='';
	$errors = array('email' => '', 'firstname' => '', 'lastname' => '');

	if(isset($_POST['signup'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['firstname'])){
			$errors['firstname'] = 'A title is required';
		} else{
			$firstname = $_POST['firstname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){
				$errors['firstname'] = 'Title must be letters and spaces only';
			}
        }
        if(empty($_POST['lastname'])){
			$errors['lastname'] = 'A title is required';
		} else{
			$lastname = $_POST['lastname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){
				$errors['lastname'] = 'Title must be letters and spaces only';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
            $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

			// create sql
			$sql = "INSERT INTO users(firstname,lastname,pass,email) VALUES('$firstname','$lastname','$password','$email')";

			// save to db and check
			if(mysqli_query($con, $sql)){
				// success
				header('Location: login.php');
			} else {
				echo 'query error: '. mysqli_error($con);
			}

			
		}

	} // end POST check

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<div >
<h2 class="di">®PRODO</h2>

</div>
<div class="gf">
<a  href="login.php"name="signup"class="btn btn-success">Back Login</a>
</div>

    <form class="s2"action="signup.php" method="POST">
        <div class="form-group w3-half" style="color: black;">
            <div class="row colss">
                <div class="col-6 sm-12">
                    <label class="lab">First name</label>
                    <input type="text"class="form-control" name="firstname" placeholder="Choose First name" required>
                    <small style="color:red"><?php echo $errors['firstname'];?></small>
                </div>
                <div class="col-6 sm-12">
                    <label class="lab">Last name</label>
                    <input type="text"class="form-control" name="lastname" placeholder="Choose Last name" required>
                    <small style="color:red"><?php echo $errors['lastname'];?></small>
                </div>
            </div>
            <div class="mama">
            <label class="lab">Email Address</label>
            <input type="email" class="form-control" name="email"  placeholder="Provide @mail.com" required>
            <small style="color:red"><?php echo $errors['email'];?></small>
            <br>
            <label class="lab">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="choose password" required>
            </div>
            <div class="btnss">
                <button role="button" name="signup"class="btn btn-primary">Signup</button>
                
            </div>
        </div>
    </form>
</body>
<style>
    .s2{
        padding-left:20px;
    }
.gf{
    padding-left:1200px;
    height:50px;
    padding-top:7px;
}
.di{
    background-color:white;
    opacity:80%;
    padding-left:500px;
    font-size:4em;color:grey
}
    .btnss{
        padding-left:280px ;
        padding-bottom: 40px;
    }
    .form-group{
        box-sizing: border-box;
        border-radius: 19px;
background: #b7b9c8;
box-shadow:  50px 50px 100px #82838e, 
             -50px -50px 100px #ecefff;
        width:680px;
        height:470px;
        border-radius:15px;   
        background-image: url("https://www.go4customer.co.uk/articleimages/15109836315%20Phrases%20Successful%20Call%20Centre%20Agents%20Never%20Say.jpg");
    }
    .colss{
        padding: 30px 30px;
    }
    .lab{
        padding-left: 10px;
        style="color: black"

        }
    .mama{
        padding-bottom: 30px;
        padding-left:30px;
        padding-right:30px;
    }
    body{
        background-image: url("https://www.answeriq.com/hubfs/new%20blog-13-compressed.jpg");
        color: black;
    }
    @media(max-width:767px){
        .gf{
            padding-left:200px;
        }
        .di{
            padding-left:25px;
        }
        .form-group{
            width:360px;
            height:400px;
            border-radius:0px;
        }
        .btnss{
            padding-left:180px;
        }
        .lab{
            font-weight:bold;
        }
        .s2{
            padding-left:10px;
        }
    }

</style>
</html>