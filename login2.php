
<br><br><br><br><br><br>
<!DOCTYPE html>
<html>
<title>Registration</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/gif" href="animated_favicon1.gif">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3 css/w3.css">



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px;}
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



<!-- ====================================================================================== -->

<?php 
session_start();
// error_reporting(0);
//include 'header.php';



if($_SERVER['REQUEST_METHOD']=='POST'){

echo "<center>";
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "db_moneyloan";
    $txtUN = $_POST['txtUN'];
    $txtPW = $_POST['txtPW'];

    $_SESSION['txtUN']=$txtUN;
    $_SESSION['txtPW']=$txtPW;



    try{
      $dbconnect = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);

      $dbconnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      echo "dbconnected!";

      // $query="SELECT * FROM login where Username = $txtUN AND Password = $txtPW";

      // $data=$dbconnect->query($query);

      // foreach ($data as $row) {
      //   $_SESSION['uuser'] = $row['User_ID'];
      //   $User_ID = $_SESSION['uuser'];
      // }

      //   $query="SELECT * FROM credentials where User_ID = $User_ID";

      // $data=$dbconnect->query($query);

      // foreach ($data as $row) {
      //   $_SESSION['txtFN'] = $row['First_Name'];
      // }

      $statement=$connect->prepare("SELECT * FROM login where Username = :Username");

      $statement->execute(array(
        ':Username' => "$txtUN"
      ));

      foreach ($statement as $row) {
        $_SESSION['uuser'] = $row['User_ID'];
        $User_ID = $_SESSION['uuser'];

        echo "USER ID: $User_ID";
      }



       

    }catch(PDOException $error){
      $error->getMessage();
    }

}
?>

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
    <input type="submit"  value="LOGIN" style="text-align: center;font-size: 200%;font-weight: bolder;background-color:  #4E424F;color: rgb(255,255,255);"></form>