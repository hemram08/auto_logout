<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<!-- jQuery library -->

	<style>
	body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}

input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

#logo {
    width: 70px;
    height: 60px
}

.heading {
    margin-bottom: 60px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F)
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}
</style>
</head>
<body>
	<?php
	session_start();
	$cont = mysqli_connect('localhost','root','','my_portfolio');
	if(isset($_POST['button'])){
		$username = mysqli_escape_string($cont,$_POST['email']);
		$password =  mysqli_escape_string($cont,$_POST['psw']);

$query = "select * from login_tbl where username = '$username' and password = '$password'";
		$stmt = mysqli_query($cont,$query);

		if(mysqli_num_rows($stmt)>0){


			$_SESSION['is_login']='yes';
			
			header("location:dashbord.php");
			die();
		}else{
			echo "here error message for wrong email or password";
		}
	}?>
	<div class="container-fluid">
	
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-10 my-5">
            <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://i.imgur.com/PSXxjNY.png"> </div>
            <h3 class="mb-5 text-center heading">We are Tidi</h3>
            <h6 class="msg-info">Please login to your account</h6>
            <form action="" method="post">

            <div class="form-group"> 
            	<label class="form-control-label text-muted">Username</label> 
            	<input type="text" id="email" name="email" placeholder="Phone no or email id" class="form-control"> 
            </div>
            <div class="form-group">
             <label class="form-control-label text-muted">Password</label>
              <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
               </div>

            <div class="row justify-content-center my-3 px-3">
             <button class="btn-block btn-color" type="submit" name="button">Login to Tidi</button>
             </div>
            </form>
        </div>
    </div>
               
    </div>

		

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
