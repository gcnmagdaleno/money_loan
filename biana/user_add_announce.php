<style>
.btnSave,#btnSave{
padding: 10px;
width: 50%;
background-color: rgb(40,60,80);
color: white;
font-weight: bolder;
font-size: 20px;
}
</style>
<body style="background-color: rgba(52,73,96,0.7);">
<form action="#" method="post" style="padding: 50px;"><center>

	<?php
	error_reporting(0);

	if($_SERVER['REQUEST_METHOD']=='POST'){




		//touch($strFileName);



		 if ($_POST['btnSave'] == "SAVE") {
		 		$strFileName = $_POST['txtFileName'].".txt";

		 		$myfile = fopen($strFileName, "a+") or die("Unable to open file!");
		//$myfile = touch($strFileName) or die("Unable to open file!");
	$txtFileBody = $_POST['txtFileBody'];
		// $txtName = $_POST['txtName'].PHP_EOL;

		if (!file_exists($strFileName)) {
	// fwrite($myfile,$txtFileBody);
					fwrite($myfile,$txtFileBody.PHP_EOL);
			// echo "File doesn't exists.";
		}else{
			fwrite($myfile,$txtFileBody.PHP_EOL);
					//fputs($myfile,$txtFileBody);

		}


		}

		}




	//192.168.10.89
	// 	$myfile = fopen("txt.txt", "a+") or die("Unable to open file!");

	// while(!feof($myfile)) {
	// 	// echo fgets($myfile)."<br>";
	// 	echo substr(fgets($myfile), 2)."<br>";

	// }




	?>

	<input type="text" name="txtFileName" style="padding: 20px;width: 50%;background-color: rgba(52,73,96,0.8);color: white;font-size: 20px;font-weight: bolder;" placeholder="Filename" value="<?php echo $strFileNameValue; ?>"><br>
	<!-- <input type="text" name="txtFileBody" placeholder=""><br> -->
	<textarea name="txtFileBody" placeholder="" style="padding: 20px;width: 50%;background-color: rgba(52,73,96,0.8);color:white;font-size: 20px;font-weight: bolder;" rows="10" cols="20"><?php if ($_POST['btnOpen'] == "OPEN") {
		$strFileNameValue = $_POST['txtFileName'];
		$myfile = fopen($strFileNameValue.".txt", "a+") or die("Unable to open file!");	$txtFileBodyValue = $_POST['txtFileBody'];
		if ($strFileNameValue == ".txt") {
		$strFileNameValue =  "Input file name";
		}else if ($strFileNameValue == "Input file name.txt") {
		$strFileNameValue =  "Input file name";
		}else{
			if(!file_exists($strFileNameValue.".txt")){
		$strFileNameValue =  "Input file name";
			}else{
		while (!feof($myfile)) {
		$cars = array(fgets($myfile));
		echo "$cars[0]";
				}
			}
		}
		} ?>
	</textarea><br>
	<input type="submit" id="btnSave" class="btnSave" name="btnSave" value="SAVE" >
	<input type="submit" name="btnOpen" value="OPEN" style="padding: 10px;width: 50%; background-color: rgb(40,60,80);color: white;font-weight: bolder;font-size: 20px;">
</form>
</div>
</center>
