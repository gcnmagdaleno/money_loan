
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Money Loan</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1 style="font-size: 40px;"><a href="admin_index.php">Money Loan</a></h1>

				<h2 style="font-size: 25px;color: black;">
					<?php
						echo strtoupper($_SESSION['role']);
					?>
				</h2>
				
			</header>

			<nav id="mainnav">
  				<ul>
                            		<li class="home1" ><a href="admin_index.php">Home</a></li>
                           		 <li class="profile1"><a  href="admin_prof.php">User's Profile</a></li>
                           		 <li class="history"><a href="admin_trans.php">Transaction's History</a></li>
                            		<li  class="loanhistory1"><a href="admin_ann.php">Announcement</a></li>


                            		<li class="logout"><?php


                           		 

                           		 // error_reporting(0);
						
$servername = "localhost";
          $dbname = "db_moneyloan";
          $username = "root";
          $password = "";

						$conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

    

echo "<center>";


$User_ID = $_SESSION['User_ID'];
$stmt = $conn->query("SELECT * FROM login WHERE User_ID = $User_ID");
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  // print "Name: <p>{".$row[0] $row[1]."}</p>";

		
    echo "<a href='admin_payment_edit.php?id=$User_ID'>Payment</a>";
// $_SESSION['User_ID']=$row[0];
// echo $_SESSION['User_ID'];

}
					?>
						<!-- <a href="admin_payment_edit.php?">Payment</a></li> -->
                            		<li class="logout1"><a href="logout.php">Logout</a></li>
                        	</ul>
			</nav>

			
			
			</aside>