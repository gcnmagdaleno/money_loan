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

	if ($_SESSION['strLogin']=="no") {
				  header("Location: login.php");
				  	$_SESSION['strLogin']="no";

	}else{

// if($_SERVER['REQUEST_METHOD']=='POST'){


	// if ($_POST['btnbtn']=="Add") {
	// echo "<br><br><br><br>add";
	// }


	// if (isset($_POST['btnbtn'])) {
	// echo "<br><br><br><br>edit";
	// }



	// if (isset($_POST['Edit'])) {
	// // echo "<br><br><br><br>Edit";
	// 	echo "edit";
	// }else if (isset($_POST['Save'])) {
	// echo "<br><br><br><br>Save";
	// }else if (isset($_POST['LOGOUT'])) {
	// echo "<br><br><br><br>LOGOUT";
	// }

	// $txtButton=$_POST['btnbtn'];
	// switch ($txtButton) {
	// 	case 'Edit':
	// 	echo "<br><br><br><br>edit";

	// 		break;

	// 	case 'Save':
	// 	echo "<br><br><br><br>save";
	// 		break;

	// 	case 'LOGOUT':
	// 	echo "<br><br><br><br>logout";

	// 	$role="";
	// 	$username="";

	// 	$_SESSION['rights']="";
	// 	$_SESSION['user']="";

	// 	$_SESSION['strLogin']="no";

	// 	  header("Location: login.php");
	// 		break;
		
	// 	default:

	// 		break;
	// }



		
// }
}



?>
<center>
<form action="logged-in.php" method="post"  style="word-wrap: break-word;">

    <button type="submit" name="btnbtn" value="LOGOUT" style="text-align: center;font-size: 200%;font-weight: bolder;background-color:  #4E424F;color: rgb(255,255,255);">LOGOUT</button>
</center><br>

<button type="submit" name="btnbtn" value="Edit">Edit</button>
<button type="submit" name="btnbtn" value="Save">Save</button>

	
<br><br><br><br><br></span></center></div></div></div></form>

<?php 

include 'footer.php';

?>