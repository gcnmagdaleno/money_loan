<?php
session_start();
error_reporting(0);
include 'admin_header.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
					echo "<script>window.location.href='admin_add_announce.php';</script>";
	
				}

?>

<style type="text/css">
	
	div{
	background-color: white;
	color: black;
	transition: 1s;
}
</style>
<body><center>
			<section id="content" class="column-right" style="background-color: #80B763;">
			
			
			<form action="#" method="POST">

			<input type="submit" name="submit" value="Create Announcement" style="padding: 20px;font-size: 20px;border-radius: 7px;float: right;"><br>

			



			</form>

		
</article>
<?php
				// include 'footer.php';

include 'admin_announcement.php';
			?>
	




</body>
</html>

