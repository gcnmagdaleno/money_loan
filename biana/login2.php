


<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/webp" href="animated_favicon1.webp">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3 css/w3.css">


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
<body style="background-color: #E7D3D5">

<!-- Content -->
<div class="w3-content" style="max-width:75%;margin-top:80px;margin-bottom:40px">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;">
  <center>
  
  <span>
   <br>
   <form action="#" method="post">
    <input type="text" name="txtUN" placeholder="Username" style="text-align: center;font-size: 150%;width: 50%;background-color: #ffffff;color: black;"><br><br>
    <input type="password" name="txtPW" placeholder="Password" style="text-align: center;font-size: 150%;width: 50%;background-color: #ffffff;color: black;"><br><br>
    <input type="submit" name="loginn"  value="LOGIN" style="text-align: center;font-size: 200%;font-weight: bolder;background-color:  #4E424F;color: rgb(255,255,255);"></form>
    

<?php
  session_start(); 
  error_reporting(0);
  extract($_POST);

 

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

            // if ($position=="user") {
            //   echo "<script>alert('Successfully Logged-in: user'); window.location.href='announcement.php';</script>";
            // }else if ($position=="admin"){
            //   echo "<script>alert('Successfully Logged-in:admin'); window.location.href='announcement.php';</script>";
            // }

                          echo "<script>alert('Successfully Logged-in:admin'); window.location.href='index.php';</script>";

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

    <br><br>

  </span>

</center>

</div>
</div>
</div>

