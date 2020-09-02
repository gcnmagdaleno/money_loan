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

            $query = "Select * from login where Username = ? AND Password = ? "; 
            $result = $conn->prepare($query); 
            $result->bindParam(1,$txtUN);
            $result->bindParam(2,$txtPW); 
            $result->execute();
            if($rows = $result->fetch())
                      {

                    
                          $position = $rows["Role"];
                          $_SESSION['role'] = $position;

            if ($position=="user") { 

              $_SESSION['User_ID'] = $rows["User_ID"];
              
              // echo "<script>alert('Successfully Logged-in: user'); window.location.href='biana/user_index.php';</script>";

             
        
            }else if ($position=="admin"){
              // echo "<script>alert('Successfully Logged-in:admin'); window.location.href='biana/admin_index.php';</script>";
            }

                          // echo "<script>alert('Successfully Logged-in:admin'); window.location.href='biana/';</script>";

                          // echo $_SESSION['role'];
                     } 


      }else{
        
        // echo "<script>alert('incorrect username/password'); window.location.href='#';</script>";
      }
    

  }catch(PDOException $e) {
    // echo "Error: " . $e->getMessage();
    // echo "<script>alert('incorrect username/password'); window.location.href='#';</script>";
}
$conn = null;



    }

  
?>

<script type="text/javascript">var code = '<!DOCTYPE html>\n<html lang=en>\n<head>\n<title>Login</title>\n<meta charset=UTF-8>\n<meta name=viewport content="width=device-width, initial-scale=1">\n<link rel=stylesheet type=text/css href=biana/vendor/bootstrap/css/bootstrap.min.css>\n<link rel=stylesheet type=text/css href=biana/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css>\n<link rel=stylesheet type=text/css href=biana/fonts/iconic/css/material-design-iconic-font.min.css>\n<link rel=stylesheet type=text/css href=biana/vendor/animate/animate.css>\n<link rel=stylesheet type=text/css href=biana/vendor/css-hamburgers/hamburgers.min.css>\n<link rel=stylesheet type=text/css href=biana/vendor/animsition/css/animsition.min.css>\n<link rel=stylesheet type=text/css href=biana/vendor/select2/select2.min.css>\n<link rel=stylesheet type=text/css href=biana/css/util.css>\n<link rel=stylesheet type=text/css href=biana/css/main.css>\n<style>html,body,h1,h2,h3,h4{font-family:"Lato",sans-serif}.mySlides{display:none}.w3-tag,.fa{cursor:pointer}.w3-tag{height:15px;width:15px;padding:0;margin-top:6px}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{background:#f1f1f1}::-webkit-scrollbar-thumb{background:#888}::-webkit-scrollbar-thumb:hover{background:#555}</style>\n</head>\n<body>\n<form action=# method=post>\n<div class=limiter>\n<div class=container-login100 style=background-color:gray>\n<div class=wrap-login100>\n<form class="login100-form validate-form">\n<span class="login100-form-title p-b-34 p-t-27">\nLogin\n</span>\n<div class="wrap-input100 validate-input" data-validate="Enter username">\n<input class=input100 type=text name=txtUN placeholder=Username>\n<span class=focus-input100 data-placeholder></span>\n</div>\n<div class="wrap-input100 validate-input" data-validate="Enter password">\n<input class=input100 type=password name=txtPW placeholder=Password>\n<span class=focus-input100 data-placeholder></span>\n</div>\n<div class=container-login100-form-btn>\n<button class=login100-form-btn>\nLogin\n</button>\n</div>\n<div class="text-center p-t-90">\n<a class=txt1 href=#>\nDon\'t have an account? <a href=registration.php style=color:white>Register Here!</a>\n</a>\n</div>\n</form>\n</div>\n</div>\n</div>\n<div id=dropDownSelect1></div>\n</form>\n</body>\n</html>';document.write(code)</script>

