<?php 
session_start();
// error_reporting(0);
//include 'header.php';

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


  $servername = "localhost";
    $dbname = "db_moneyloan";
    $username = "root";
    $password = "";
 

            try {
                $DBconn = new PDO("mysql:host=$servername; dbname=$dbname; ", $username, $password);
                $DBconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD']=='POST'){



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






//$query="INSERT INTO credentials FROM db_moneyloan VALUES('$_SESSION['txtFN']','$_SESSION['txtMN]','$txtLN','$txtBday',date_sub(now(),interval year($txtBday)),'$txtOccupation','$txtCompanyAddress','$txtSalary')";

$date1=date_create("2018");
$date2=date_create($txtBday);
$diff=date_diff($date1,$date2);
$date3=$diff->format('%y');
$date6 = 2018 - intval($date3);

$date4=date_create($txtBday);
$date5= date_format($date4,"F d, Y");

$date4=$diff->format('%F %m, %Y');
//echo $diff->format('%y year(s)');

$date99 = DateTime::createFromFormat("Y-m-d", $_POST['txtBday']);
$date100= 2018 - ($date99->format("Y"));


$DBconn -> exec ("INSERT INTO credentials VALUES('','$txtFN','$txtMN','$txtLN','$txtBday','$date100','$txtOccupation','$txtCompanyAddress','$txtSalary','$txtCD','$txtAddress')");

    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);



// $stmt = $conn->prepare("SELECT User_ID FROM credentials WHERE First_Name = '$txtFN'"); 
//     $stmt->execute();

//     // set the resulting array to associative
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
//     foreach($stmt as $v) { 
//         $_SESSION['User_ID'] = implode("", $v);
//     }
 


////////////////////////

            $query = "SELECT * FROM credentials WHERE First_Name = ?"; 
            $result = $conn->prepare($query); 
            $result->bindParam(1,$txtFN);
            $result->execute();
            if($rows = $result->fetch())
                      {
                         
                          $User_ID = $rows["User_ID"];
                     }
///////////////////////



// $DBconn -> exec ("INSERT INTO reference_credentials VALUES('','$User_ID',$txtRName1,$txtRRel1,$txtRAdd1)");

// $DBconn -> exec ("INSERT INTO reference_credentials VALUES('','$User_ID',$txtRName2,$txtRRel2,$txtRAdd2)");

// $DBconn -> exec ("INSERT INTO reference_credentials VALUES('','$User_ID',$txtRName3,$txtRRel3,$txtRAdd3)");


            $DBconn -> exec("INSERT INTO reference_credentials VALUES('','$User_ID','$txtRName1','$txtRRel1','$txtRAdd1')");

            $DBconn -> exec("INSERT INTO reference_credentials VALUES('','$User_ID','$txtRName2','$txtRRel2','$txtRAdd2')");

            $DBconn -> exec("INSERT INTO reference_credentials VALUES('','$User_ID','$txtRName3','$txtRRel3','$txtRAdd3')");

            $txtUSER = "user";
            $DBconn -> exec("INSERT INTO login VALUES('$User_ID','$txtUN','$txtPW','$txtUSER')");

            // $txtUSER = "user";
            // $DBconn -> exec("INSERT INTO login VALUES ('$User_ID','$txtUN','$txtPW','$txtUSER'");


        

        $IDType = $_POST['IDType'];
        $_SESSION["IDType"]=$IDType;
        //$fileID = mysqli_real_escape_string($con, $_POST['filefield']);

        //renderForm($IDType);

        $file=$_FILES['IDfilefield'];
      
        //$upload_directory=sys_get_temp_dir()."\\";
          $upload_directory=".\\biana\\uploads\\";

        //$folder = "uploads";

        //if(!is_dir($folder)) mkdir($folder);
$ext_str = "gif,jpg,jpeg,tiff,bmp,png";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;
$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files are allowed to upload";

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

 

    $DBconn -> exec("INSERT INTO proof_id VALUES ('$User_ID','$IDType','$path')");




/////////////////////////////////////////////////////////////bill

        $BillType =  $_POST['BillType'];
        //$fileID = mysqli_real_escape_string($con, $_POST['filefield']);

        //renderForm($IDType);

        $file=$_FILES['Billfilefield'];
        //$upload_directory=sys_get_temp_dir()."\\";
          $upload_directory=".\\biana\\uploads\\";

        //$folder = "uploads";

        //if(!is_dir($folder)) mkdir($folder);
$ext_str = "gif,jpg,jpeg,tiff,bmp,png";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;
$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files are allowed to upload";

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

 


$DBconn -> exec ("INSERT INTO proof_bill VALUES ('$User_ID','$BillType','$path')");



echo "<script>alert('Succesfully Registered');window.location.href='biana/login.php';</script>";

      /////////////////////////////





      // echo "<script>alert('Thanks for registering!');
      // window.location.href='view.php';
      // </script>";


  
} 





}
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }


?>

<!DOCTYPE html>
<html>
<title> Registration</title>
<link rel="shortcut icon" href="favicon.png" type="image/png">
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
<div class="w3-content" style="max-width:1100px;margin-top:40px;margin-bottom:40px">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8">
  <center>


   
  
  <span>
        <br>
    <b style="text-align: center;font-weight: bolder;font-size: 275%;">Registration</b><br><div style="padding: 1%;">
            <link href="w3 css/bootstrap.css" rel="stylesheet" id="bootstrap-css"><link rel="stylesheet" type="text/css" href="registration.css">
            <script src="w3 css/javascript.css"></script>
            <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
            <br>
<!-- <marquee> -->
<form id="regForm" name="regForm" method="post" action="#" enctype="multipart/form-data">

        <div class="tab">
        <input type="text" name="txtFN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="First Name" value="<?php error_reporting(0); echo $_SESSION['txtFN'];?>"> 
        <input type="text"  name="txtMN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Middle Name" value="<?php error_reporting(); echo $_SESSION['txtMN'];?>">
        <input type="text" name="txtLN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Last Name" value="<?php error_reporting(); echo $_SESSION['txtLN'];?>">
        <input type="text" name="txtAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 85%;" placeholder="Address"><br><br><br>
        <b>Birthday:</b> 
        <input type="date" name="txtBday" style="text-align: right;font-weight: bolder;font-size: 100%;width: 150px;" placeholder="Birthday" value="Birthday">
        <br><br><br>
        <input type="text" name="txtOccupation" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Occupation">
        <input type="text" name="txtCompanyAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Company Address">
        <input type="text" name="txtSalary" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Salary">
        <input type="text" name="txtCD" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Contact Number" value="<?php echo $_SESSION['txtCD'];?>">

        <!-- <input type="number" name="txtCD" style="text-align: center;font-weight: bolder;font-size: 100%;width: 250px;float: right;" placeholder="Contact Number" value="<?php echo $_SESSION['txtCD'];?>"> -->

        <br><br><br><br>
        <b style="text-align: center;font-weight: bolder;font-size: 150%;float: left;font-weight: bolder;margin-left: 9%;">References</b><br><div style="padding: 1%;"><br>
        <input type="text" name="txtRName1" style="text-align: center;font-weight: bolder;font-size: 100%;float: left;margin-left: 7.5%" placeholder="Name"> 
        <input type="text"  name="txtRRel1" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Relationship" >
        <input type="text" name="txtRAdd1" style="text-align: center;font-weight: bolder;font-size: 100%;float: right;margin-right: 7.5%" placeholder="Address" ><br><br>
        <input type="text" name="txtRName2" style="text-align: center;font-weight: bolder;font-size: 100%;float: left;margin-left: 7.5%" placeholder="Name"> 
        <input type="text"  name="txtRRel2" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Relationship" >
        <input type="text" name="txtRAdd2" style="text-align: center;font-weight: bolder;font-size: 100%;float: right;margin-right: 7.5%" placeholder="Address" ><br><br>
        <input type="text" name="txtRName3" style="text-align: center;font-weight: bolder;font-size: 100%;float: left;margin-left: 7.5%" placeholder="Name"> 
        <input type="text"  name="txtRRel3" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Relationship" >
        <input type="text" name="txtRAdd3" style="text-align: center;font-weight: bolder;font-size: 100%;float: right;margin-right: 7.5%" placeholder="Address" ><br><br><br><br>
        </div></div></span>

        <div class="tab">
            (UPLOAD YOUR ID)

            <?php 

            include 'upload_id.php';

            ?>

            
        </div>

        <div class="tab">
            (UPLOAD YOUR PROOF OF BILLING)

            <?php 

            include 'upload_bill.php';

            ?>


            <br><br><br><br><br><br>
        </div>

       <div class="tab">

    <input type="text" name="txtUN" placeholder="Username" required style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;margin-top: -1%;width: 50%"><br><br>
    <input type="text" name="txtPW" placeholder="Password" required style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;width: 50%"><br><br>
</div>
  

       
    
    <br><br><br><br><br><br>
  </center>



 



  <div style="overflow:auto; text-align: right; position:all; margin-top: -25px;margin-right: 25px;">
    <div style="float:right; text-align: right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: --><br>
  <div style="text-align:center; overflow:auto; text-align: center; position:all;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>

</form></marquee> </span>


   
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none"; 
     
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }

  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();

  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
    window.location.href = '#top';

  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
   window.location.href = '#top';

}
</script>


</div>


</div><br></center>

</center>

</div>
</div>
</div>

<?php 

//include 'footer.php';

?>