<?php
	error_reporting(0);


	?>
<style>
.btnSave,#btnSave{
padding: 10px;
width: 50%;
background-color: rgb(40,60,80);
color: white;
font-weight: bolder;
font-size: 20px;
}

div{
	padding:20px;margin-top:50px;background-color: white;
	color: black;border-radius:50px;width:90%;font-weight:bolder;font-family:sans-serif;word-wrap: break-word;
		transition: .2s;

}

div:hover{
	border-radius:50px;
	transition: .5s;
}


</style>
<body style="background-color: rgba(52,73,96,0.7);">
<form action="#" method="post" style="padding: 50px;"><center>

	
			<b style="color: black;font-weight: bolder;font-size: 40px;">A N N O U N C E M E N T</b>
	
</center><center>
	<div style=""><i name="txtFileBody" style="word-wrap: break-word;"></i>	
		<?php 
					$myfile = fopen("announcement.txt", "a+") or die("Unable to open file!");

					while (!feof($myfile)) {
					$cars = array(fgets($myfile));
					echo "$cars[0]<br>";
				}
		?>
		</div>


		<div style=""></i>		<?php 
					$myfile = fopen("announcement2.txt", "a+") or die("Unable to open file!");

					while (!feof($myfile)) {
					$cars = array(fgets($myfile));
					echo "$cars[0]<br>";
				}

		?>
		</div>





</form>





	






</center>
