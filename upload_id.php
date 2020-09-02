
<!DOCTYPE html>
<html>
<title>Home</title>
<!--link rel="shortcut icon" href="favicon.png" type="image/png"


 background: linear-gradient(#33ccff 0%, #ff99cc 100%);
-->
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

<center>


<?php
error_reporting(0);
// $conn = mysqli_connect("localhost","root","","db_moneyloan");
// if(mysqli_errno($conn))
// {
// echo "Can't Connect to mySQL:".mysqli_connect_error();
// }

// if (isset($_POST['submit']))
// {

// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $description = mysqli_real_escape_string($conn, $_POST['description']);

// if ($name == '' || $description == '' )
// {

// $error = 'ERROR: Please fill required fields!';

// renderForm($name, $description);
// }
// else
// {

// if(!empty($_FILES['filefield'])){     //additional
// if(isset($_FILES['filefield'])){
// $file=$_FILES['filefield'];
// $upload_directory='uploads';
// $folder = "uploads";
// //$upload_directory=sys_get_temp_dir().'/uploads/';
// //$folder = sys_get_temp_dir()."/uploads";
// if(!is_dir($folder)) mkdir($folder);
// $ext_str = "gif,jpg,jpeg,tiff,bmp,png";
// $allowed_extensions=explode(',',$ext_str);
// $max_file_size = 10485760;
// $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
// if (!in_array($ext, $allowed_extensions) ) {
// echo "only".$ext_str." files are allowed to upload";

// }

// if($file['size']>=$max_file_size){

// echo "only the file less than ".$max_file_size."mb  allowed to upload";

// }

//     $path=md5(microtime()).'.'.$ext;
 
//     //$path = $filefield;
//     if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
//     $filefield = $_FILES["filefield"]["IDType"];
//     $path = "biana/uploads/".$path;
    
//    //$path = $upload_directory.$filefield;
//    //$path = "%temp%/uploads/".$filefield;
// }
// }
// }
// }

// $IDType = $_POST['IDType'];
// if ($filefield == null) {
//  $path="";
//     $query = "INSERT INTO proof_id VALUES ('','$IDType','$path')";
// }
// else {
//    $query = "INSERT INTO proof_id VALUES ('','$description','$path')";
//     //$query = "INSERT INTO `item`(`name`, `description`) VALUES ('$name','$description')";
// }
// $result = mysqli_query($conn, $query);
//  if($result)
//     {
//     echo '<script language="javascript">';
//     echo 'alert("Item created!")';
//     echo '</script>';
// }
// }
?>

<html><style type="text/css">
    
    button:hover,input:hover,textarea:hover{
        background-color: pink;
        color: black;
    }

</style>



<center>
   
<br>
    <!-- <strong style="padding: 1%;font-size: 25px;font-weight: bolder;word-wrap: break-word;">Item Name: </strong>

    <textarea style="resize: none;padding: 1%;word-wrap: break-word;" type="text" id="subject" name="name"  maxlength="50" placeholder="Write here..." required></textarea><br/>   

    <strong style="padding: 1%;font-size: 25px;font-weight: bolder;word-wrap: break-word;">Desciption: </strong>
    <textarea style="resize: none;padding: 1%;word-wrap: break-word;" type="text" id="issue" name="description" maxlength="200" placeholder="Write here..." required></textarea><br/><br/> -->

      <strong style="padding: 1%;font-size: 25px;font-weight: bolder;word-wrap: break-word;">ID Type:  </strong>
    <select style="padding: 1%;font-size: 20px;font-weight: bolder;word-wrap: break-word;" name="IDType">
      <option value="Government ID">Government ID</option>
      <option value="Driver's License">Driver's License</option>
      <option value="Student ID">Student ID</option>
      <option value="Passport">Passport</option>
    </select>
   <br><br>
    
    <label style="padding: 1%;font-size: 25px;font-weight: bolder;padding: 1%;font-size: 25px;font-weight: bolder;word-wrap: break-word;">Upload Image:</label>
   <input id="filefield" type="file" name="IDfilefield" multiple style="padding: 1%;font-size: 25px;font-weight: bolder;word-wrap: break-word;" value="Choose image files" placeholder="Choose image files" /><br></center><br>
   <i style="padding: 1%;font-size: 15px;font-weight: bolder;padding: 1;font-weight: bolder;word-wrap: break-word;"><font color="red" style="font-size: 30px;">*</font><font style="color: gray" >only</font> gif,jpg,jpeg,tiff,bmp,png <font style="color: gray" >files are allowed to upload</font></i>
   </i><br><br>
   <i style="padding: 1%;font-size: 15px;font-weight: bolder;padding: 1;font-weight: bolder;word-wrap: break-word;"><font color="red" style="font-size: 30px;">*</font> <font style="color: gray" >only the file less than</font>  <font color="black">10MB</font> <font style="color: gray" >are allowed to upload</font>
   </i><br><br><br><br>


   <input type="hidden" name="MAX_FILE_SIZE" value="100000" style="word-wrap: break-word;" />



 