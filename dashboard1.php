<style type="text/css">
	
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
	@font-face {
 font-family: 'mali';
  src: url('./fonts/mali.ttf');
}
html,body{

	font-family: mali;
}

</style>
<center><form action="#" method="post" style="align-items: center;align-content: center;align-self: center;justify-content:center;font-family: mali;">
	
	<div  style="width:110%;height: 20%;margin-left: -10px;font-family: mali;font-size: 35px;font-weight: bolder"></div><br>
	<input type="submit" name="btnCRUD" value="ADD" style="width:110%;height: 20%;margin-top: -10px;margin-left: -10px;font-family: mali;font-size: 35px;font-weight: bolder;border-radius: 0;border-width: 0;"><br>
	<input type="submit" name="btnCRUD" value="UPDATE" style="width:110%;height: 20%;margin-left: -10px;font-family: mali;font-size: 35px;font-weight: bolder;"><br>
	<input type="submit" name="btnCRUD" value="DELETE" style="width:110%;height: 20%;margin-left: -10px;font-family: mali;font-size: 35px;font-weight: bolder;border-radius: 0;border-width: 0;"><br>

	<?php
	session_start();
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			switch ($_POST['btnCRUD']) {
				case 'ADD':
					echo "ADD";	
					$_SESSION['btnCRUD'] = "ADD";
					echo "<script>parent.frames['i2'].location.reload();
</script>";
					break;
				case 'UPDATE':
					echo "UPDATE";	
					$_SESSION['btnCRUD'] = "UPDATE";

					break;
				case 'DELETE':
					echo "DELETE";	
					$_SESSION['btnCRUD'] = "DELETE";

					break;
				
				default:
					# code...
					break;
			}
		}
	  ?>
	
	

</form></center>