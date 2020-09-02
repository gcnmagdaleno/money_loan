<?php
  session_start(); 
  extract($_POST);
  error_reporting(0);

 

        $txtUN = $_POST['txtUN'];
        $txtPW = $_POST['txtPW'];
        $_SESSION['txtUN'] = $txtUN;
        $_SESSION['txtPW'] = $txtPW;

          $servername = "localhost";
          $dbname = "db_moneyloan";
          $username = "root";
          $password = "";


           if($_SERVER['REQUEST_METHOD']=='POST'){

            try {
    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
 
    if((trim($v) != "")||(trim($v) != null)||(trim($v) !== "")||(trim($v) !== null)){
        // echo "Successfully Logged-in";

            $query = "Select Role from login where Username = ? AND Password = ? "; 
            $result = $conn->prepare($query); 
            $result->bindParam(1,$txtUN);
            $result->bindParam(2,$txtPW); 
            $result->execute();
            if($rows = $result->fetch())
                      {
                          $position = $rows["Role"];
                          $_SESSION['role'] = $position;

            if ($position=="user") {
              echo "<script>alert('Successfully Logged-in: user'); window.location.href='biana/user_index.php';</script>";
            }else if ($position=="admin"){
              echo "<script>alert('Successfully Logged-in:admin'); window.location.href='biana/admin_index.php';</script>";
            }

                          // echo "<script>alert('Successfully Logged-in:admin'); window.location.href='biana/';</script>";

                          // echo $_SESSION['role'];
                     } 


      }else{
        
        echo "<script>alert('incorrect username/password'); window.location.href='#';</script>";
      }
    

  }catch(PDOException $e) {
    // echo "Error: " . $e->getMessage();
    echo "<script>alert('incorrect username/password'); window.location.href='#';</script>";
}
$conn = null;



    }

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>

</head>
<body >
	<form action="#" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-color: gray">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="txtUN" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="txtPW" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Don't have an account? <a href="registration.php" style="color: white;">Register Here!</a>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</form>
</body>
</html>