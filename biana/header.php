
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
				<h1 style="font-size: 40px;"><a href="#">Money Loan</a></h1>

				<h2 style="font-size: 25px;color: black;">
					<?php
						echo strtoupper($_SESSION['role']);
					?>
				</h2>
				
			</header>

			<nav id="mainnav">
  				<ul>
                            		<li class="home1" ><a href="index.php">Home</a></li>
                           		 <li class="profile1"><a  href="admin_prof.php">User's Profile</a></li>
                           		 <li class="history"><a href="admin_trans.php">Transaction's History</a></li>
                            		<li class="loanhistory1"><a href="admin_hist.php">Loan History</a></li>
                            		<li class="logout1"><a href="logout.php">Logout</a></li>
                        	</ul>
			</nav>

			
			
			</aside>