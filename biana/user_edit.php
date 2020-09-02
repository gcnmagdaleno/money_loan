    <body style="background-color: #80B763">
      <?php
session_start();
error_reporting(0);




$txtFN = $_POST['txtFN'];
$txtMN = $_POST['txtMN'];
$txtUN = $_POST['txtUN'];
$txtPW = $_POST['txtPW'];
$txtLN = $_POST['txtLN'];
$txtCD = $_POST['txtCD'];

$txtBday = $_POST['txtBday'];
$txtAddress = $_POST['txtAddress'];
$txtOccupation = $_POST['txtOccupation'];
$txtCompanyAddress = $_POST['txtCompanyAddress'];
$txtSalary = $_POST['txtSalary'];

$txtRRel1 = $_POST['txtRRel1'];
$txtRRel2 = $_POST['txtRRel2'];
$txtRRel3 = $_POST['txtRRel3'];
$txtRName1 = $_POST['txtRName1'];
$txtRName2 = $_POST['txtRName2'];
$txtRName3 = $_POST['txtRName3'];
$txtRAdd1 = $_POST['txtRAdd1'];
$txtRAdd2 = $_POST['txtRAdd2'];
$txtRAdd3 = $_POST['txtRAdd3'];

/////////////////////SESSION
 $_SESSION['txtFN']=$txtFN;
 $_SESSION['txtMN']=$txtMN;
 $_SESSION['txtUN']=$txtUN;
 $_SESSION['txtPW']=$txtPW;
 $_SESSION['txtLN']=$txtLN;
 $_SESSION['txtCD']=$txtCD;

 $_SESSION['txtBday']=$txtBday;
 $_SESSION['txtAddress']=$txtAddress;
 $_SESSION['txtOccupation']=$txtOccupation;
 $_SESSION['txtCompanyAddress']=$txtCompanyAddress;
 $_SESSION['txtSalary']=$txtSalary;

 $_SESSION['txtRRel1']=$txtRRel1;
 $_SESSION['txtRRel2']=$txtRRel2;
 $_SESSION['txtRRel3']=$txtRRel3;
 $_SESSION['txtRName1']=$txtRName1;
 $_SESSION['txtRName2']=$txtRName2;
 $_SESSION['txtRName3']=$txtRName3;
 $_SESSION['txtRAdd1']=$txtRAdd1;
 $_SESSION['txtRAdd2']=$txtRAdd2;
 $_SESSION['txtRAdd3']=$txtRAdd3;


      

$servername = "localhost";
$username = "root";
$password = "";
    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$stmt = $conn->query("SELECT * FROM credentials WHERE  User_ID=".$_GET['id']);
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  // print "Name: <p>{".$row[0] $row[1]."}</p>";
    $_SESSION['txtFN']=$row[1];
    $_SESSION['txtMN']=$row[2];
    $_SESSION['txtLN']=$row[3];
    $_SESSION['txtAddress']=$row[10];
    $_SESSION['txtBday']=$row[4];
    $_SESSION['txtOccupation']=$row[5];
    $_SESSION['txtCompanyAddress']=$row[6];
    $_SESSION['txtSalary']=$row[7];
    $_SESSION['txtCD']=$row[9];
}

$stmt = $conn->query("SELECT * FROM login WHERE  User_ID=".$_GET['id']);
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  // print "Name: <p>{".$row[0] $row[1]."}</p>";
    $_SESSION['txtUN']=$row[1];
    $_SESSION['txtPW']=$row[2];
  
    
}

//////////////////////////////// this is for id

        $IDType = $_POST['IDType'];
        $_SESSION["IDType"]=$IDType;
        //$fileID = mysqli_real_escape_string($con, $_POST['filefield']);

        //renderForm($IDType);

        $file=$_FILES['IDfilefield'];
      
        //$upload_directory=sys_get_temp_dir()."\\";
          $upload_directory=".\\uploads\\";

        //$folder = "uploads";

        //if(!is_dir($folder)) mkdir($folder);
$ext_str = "gif,jpg,jpeg,tiff,bmp,png";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;
$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
if (!in_array($ext, $allowed_extensions) ) {

}

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload";

}

    $path=md5(microtime()).'.'.$ext;
 
    //$path = $filefield;
    if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
    $filefield = $_FILES["IDfilefield"];
    //$path = ".&bsol;uploads&bsol;".$path;
  }

  // '$User_ID','$IDType','$path'

///////////////////////////////

  //////////////////////////// this is for bill

         $IDType =  $_POST['BillType'];
        //$fileID = mysqli_real_escape_string($con, $_POST['filefield']);

        //renderForm($IDType);

        $file=$_FILES['Billfilefield'];
        //$upload_directory=sys_get_temp_dir()."\\";
          $upload_directory=".\\uploads\\";

        //$folder = "uploads";

        //if(!is_dir($folder)) mkdir($folder);
$ext_str = "gif,jpg,jpeg,tiff,bmp,png";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;
$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
if (!in_array($ext, $allowed_extensions) ) {

}

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload";

}

    $path=md5(microtime()).'.'.$ext;
 
    //$path = $filefield;
    if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
    $filefield = $_FILES["Billfilefield"];
    //$path = ".&bsol;uploads&bsol;".$path;
  }

  // '$User_ID','$IDType','$path'

  /////////////////////////////
  $btnSubmit = $_POST['btnSubmit'];

        if ($_SERVER['REQUEST_METHOD']=="POST") {
                if ($btnSubmit == "UPDATE") {
                $date99 = DateTime::createFromFormat("Y-m-d", $_POST['txtBday']);
                $date100= 2018 - ($date99->format("Y"));

                         try {
                $conn = new PDO("mysql:host=localhost;dbname=db_moneyloan", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare("UPDATE login SET Username='$txtUN', Password='$txtPW' WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("UPDATE credentials SET First_Name='$txtFN', Middle_Name='$txtMN',Last_Name='$txtLN', Birthday='$txtBday', Age='$date100',Occupation='$txtOccupation', Company_Address='$txtCompanyAddress',Salary='$txtCD', Address='$txtAddress' WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("UPDATE proof_bill SET ID_Bill='$BillType', Path__='$path' WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("UPDATE proof_id SET ID_Type='$IDType', Path__='$path' WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                echo "<script>alert('Successfully Updated');window.location.href='admin_prof.php';</script>";


        
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

                       }else{

                        try {
                $conn = new PDO("mysql:host=localhost;dbname=db_moneyloan", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare("DELETE FROM login WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("DELETE FROM credentials WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("DELETE FROM proof_bill WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("DELETE FROM proof_id WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                $query = $conn->prepare("DELETE FROM reference_credentials WHERE User_ID = '".$_GET['id']."'"); 
                $query->execute();

                include 'logout.php';
                echo "<script>alert('Successfully DELETED');window.location.href='admin_prof.php';</script>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

                }
        }


      ?>  
<body style="background-color: transparent;">
<form id="regForm" name="regForm" method="post" action="#">
<!-- <div style="float: right;margin-right: 200px;"><input type="text"  name="txtFN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="search here" > <input type="submit" name="btnSubmit" value="SEARCH" style="text-align: center;font-weight: bolder;font-size: 10px;border-radius: 10px;padding: 10px;"></div><br><br> -->
<!-- Content -->
<div class="w3-content" style="height: 70%;padding: 50px" >

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;height: 100%;">
  <center>

  <span>
     
    <b style="text-align: center;font-weight: bolder;font-size: 275%;">USER CREDENTIALS (CRUD)</b><br><div style="padding: 1%;">
            <link href="w3 css/bootstrap.css" rel="stylesheet" id="bootstrap-css"><link rel="stylesheet" type="text/css" href="registration.css">
            <script src="w3 css/javascript.css"></script>


        <input type="text"  disabled="true" name="txtFN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="First Name" value="<?php echo $_SESSION['txtFN'];?>"> 
        <input type="text"   disabled="true" name="txtMN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Middle Name" value="<?php echo $_SESSION['txtMN'];?>">
        <input type="text"  disabled="true" name="txtLN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Last Name" value="<?php echo $_SESSION['txtLN'];?>">
        <input type="text"  name="txtAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 85%;" placeholder="Address" value="<?php echo $_SESSION['txtAddress'];?>"><br><br><br>
        <b>Birthday:</b> 
        <input type="date"  disabled="true" name="txtBday" style="text-align: right;font-weight: bolder;font-size: 100%;width: 150px;" placeholder="Birthday" value="<?php echo $_SESSION['txtBday'];?>">
        <br><br><br>
        <input type="text"  name="txtOccupation" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Occupation" value="<?php echo $_SESSION['txtOccupation'];?>">
        <input type="text"  name="txtCompanyAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Company Address" value="<?php echo $_SESSION['txtCompanyAddress'];?>">
        <input type="text"  name="txtSalary" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Salary" value="<?php echo $_SESSION['txtSalary'];?>">
        <input type="text"  name="txtCD" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Contact Number" value="<?php echo $_SESSION['txtCD'];?>"><br><br><br><br></div></span></div></div></div>
        <!-- ///////////////////////////////// -->

        <div class="w3-content" style="height: 60%;padding: 50px" >

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;height: 100%;">
  <center>

  <span>
     
    <b style="text-align: center;font-weight: bolder;font-size: 275%;">LOGIN CREDENTIALS (CRUD)</b><br><div style="padding: 1%;">
            <link href="w3 css/bootstrap.css" rel="stylesheet" id="bootstrap-css"><link rel="stylesheet" type="text/css" href="registration.css">
            <script src="w3 css/javascript.css"></script>


             <input type="text" name="txtUN" placeholder="Username"  style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;margin-top: -1%;width: 50%" value="<?php echo $_SESSION['txtUN'];?>"><br><br>
    <input type="password" name="txtPW" placeholder="Password"  style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;width: 50%" value="<?php echo $_SESSION['txtPW'];?>"><br><br>
</div></span></div></div></div>


 <!-- ///////////////////////////////// -->

  


<!-- ///////////////////////////////// -->

    
<center>
        <div style="">       
                <input type="submit" name="btnSubmit" value="UPDATE" style="text-align: center;font-weight: bolder;font-size: 20px;border-radius: 10px;padding: 10px;">
        <!-- input type="submit" name="btnSubmit" value="DELETE" style="text-align: center;font-weight: bolder;font-size: 20px;border-radius: 10px;padding: 10px;"> -->
        </div><br><br>
 