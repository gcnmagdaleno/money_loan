<link rel="stylesheet" type="text/css" href="./w3 css/view1.css">


<body >
	<!-- <div style="border-radius: 10px;
border-top-left-radius: 100px;
border-bottom-right-radius: 100px;background-color: #2f3640;padding: 20px"> -->
<center>

	<div class="s-layout">
<!-- Sidebar -->
<div class="s-layout__sidebar">
  <a class="s-sidebar__trigger" href="#">
     <img src="menu1.webp" style="height:35px;">
  </a>

  <nav class="s-sidebar__nav">
     <ul>
        <li>
           <a class="s-sidebar__nav-link" href="logout.php">
             </i><em>Logout</em>
           </a>
        </li>
     </ul>
  </nav>
</div>

<!-- Content -->
<main class="s-layout__content">

<?php

session_start();
error_reporting(0);

$txtUN = $_SESSION['txtUN'];
$txtFN = $_SESSION['txtFN'];
// echo "<div style='background-color:black; width:200px;word-wrap: break-word;'> s ".intval($_SESSION['uuser']).strval($_SESSION['txtFN'])."</div>";




      $con = mysqli_connect("localhost", "root", "", "db_moneyloan");

        $sql="SELECT * FROM credentials WHERE First_Name = $txtFN";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  	$i=0;
  if ($row=mysqli_fetch_array($result))
    {
    	$path = sys_get_temp_dir()."\\".$row["Birthday"];

    	//echo $row["Birthday"]."";
    	$_SESSION['Birthday'] = $row["Birthday"]."";


    	echo '
<table style="word-wrap: break-word;">
<tr style="padding: 20px;word-wrap: break-word;">
	<th style="padding: 20px;word-wrap: break-word;">
		User ID
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		First Name
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Middle Name
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Last Name
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Birthday
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Occupation
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Age
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Company Address
	</th>
	<th style="padding: 20px;word-wrap: break-word;">
		Salary
	</th>
</tr>	

<tr style="word-wrap: break-word;">
	<td style="text-align: center;word-wrap: break-word;">
	 '.$row["User_ID"].'
	</td>
	
	<td style="text-align: center;word-wrap: break-word;">
	'.$row["First_Name"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Middle_Name"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	 '.$row["Last_Name"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Birthday"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Occupation"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Age"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Company_Address"].'
	</td>

	<td style="text-align: center;word-wrap: break-word;">
	'.$row["Salary"].'
	</td>
</tr>

</table><br><br>';

    //echo "<img src='$path'";
    //echo "$path";
    	//echo "<img src='C:&sol;Users&sol;cherr&sol;AppData&sol;Local&sol;Temp&sol;cdfeb78d4627dd41ad241b0c1a3ded06.jpg'>";
    	// /C:\Users\cherr\Pictures\IV OF SPADES\1
    	    	//echo "<br><br>Uploaded ID<br><img src='./uploads/$row[0]' style='width=:200px;height:200px;'><br><br>";

    }
  // Free result set
  mysqli_free_result($result);
}


echo "<br><br><br>Click the images to view fullscreen<br><br><br>";
// echo intval($_SESSION['uuser']);
$sql="SELECT Path FROM proof_bill WHERE User_ID = (SELECT User_ID FROM Login WHERE Username = $txtUN)";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    	$path = sys_get_temp_dir()."\\".$row[0];
    //echo "<img src='$path'";
    //echo "$path";
    	//echo "<img src='C:&sol;Users&sol;cherr&sol;AppData&sol;Local&sol;Temp&sol;cdfeb78d4627dd41ad241b0c1a3ded06.jpg'>";
    	// /C:\Users\cherr\Pictures\IV OF SPADES\1
    	    	echo "<br><br>Proof of billing: <br><a href='./uploads/$row[0]'><img class='img1' src='./uploads/$row[0]' style='height:200px;border-radius:20px;'></a><br><br>";

    }
  // Free result set
  mysqli_free_result($result);
}

$sql="SELECT Path FROM proof_id WHERE User_ID = (SELECT User_ID FROM Login WHERE Username = $txtUN)";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    	$path = sys_get_temp_dir()."\\".$row[0];
    //echo "<img src='$path'";
    //echo "$path";
    	//echo "<img src='C:&sol;Users&sol;cherr&sol;AppData&sol;Local&sol;Temp&sol;cdfeb78d4627dd41ad241b0c1a3ded06.jpg'>";
    	// /C:\Users\cherr\Pictures\IV OF SPADES\1
    	    	echo "<br><br>Type of id uploaded: <br><a href='./uploads/$row[0]'><img class='img2' src='./uploads/$row[0]' style='height:200px;border-radius:20px;padding:10px'></a><br><br>";

    }
  // Free result set
  mysqli_free_result($result);
}
?>


<!-- <img src="file:C://Users/cherr/Pictures/IV OF SPADES/1/zild.jpg"> -->
<!-- C:\Users\cherr\Pictures\IV OF SPADES\1 -->

<!-- <img src=".\uploads\b27181a159684cd9853b9f277a813616.png"> -->


</main>
</div>