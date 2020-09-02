<?php 

include 'header.php';
error_reporting(0);
//<center>
?>
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/gif" href="animated_favicon1.gif">
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
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:40px">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;">
  <center>
  
  <span>
   <br>
<br><br><br><br><br>

<?php

session_start();
error_reporting(0);
$role=$_SESSION['rights'];
$username=$_SESSION['user'];
if($username !== null){

	include('view.php');
echo "<center>
    
     <!-- <object width='100%' height='400px' data='home.php'></object> -->
        <strong style='color: blue;'>Your username: </strong>".$username."<br>
        <strong style='color: blue;'>Your role: </strong>".$role."


";
}

	// if ($_SESSION['strLogin']=="no") {
	// 			  header("Location: login.php");
	// 			  	$_SESSION['strLogin']="no";

	// }else{


	// 	}

	if ($_POST['btnbtn']=="LOGOUT") {

		$role="";
		$username="";

		$_SESSION['rights']="";
		$_SESSION['user']="";

		$_SESSION['strLogin']="no";

		session_destroy();

		header("Location: login.php");

		//echo "<script> window.locaton.href=login.php </script>";

	}else if ($_POST['btnbtn']=="EDIT") {
	echo "<br><br><br><br>EDIT";
	}else if ($_POST['btnbtn']=="SAVE") {
	echo "<br><br><br><br>SAVE";
	}



?>

<form action="#" method="post">
<input type="submit" name="btnbtn" value="LOGOUT">
<input type="submit" name="btnbtn" value="EDIT">
<input type="submit" name="btnbtn" value="SAVE">
</form></span></center></div></div></div>



<?php 

include 'footer.php';

?>