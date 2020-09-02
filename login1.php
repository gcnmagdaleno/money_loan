
<br><br><br><br><br><br>
<!DOCTYPE html>
<html>
<title>Registration</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/gif" href="animated_favicon1.gif">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3 css/w3.css">



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px;}
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



<!-- ====================================================================================== -->

<?php 
session_start();
error_reporting(0);
//include 'header.php';

$servername = "localhost";
$username = "root";
$password = "";
    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$stmt = $conn->query("SELECT * FROM credentials WHERE  User_ID=".$_SESSION['User_ID']);
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

if($_SERVER['REQUEST_METHOD']=='POST'){

}


?>

<body style="background-color: transparent;overflow: hidden;">

<!-- Content -->
<div class="w3-content" style="max-width:1100px;">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8">
  <center>

  <span>
     
    <b style="text-align: center;font-weight: bolder;font-size: 275%;">Registration</b><br><div style="padding: 1%;">
            <link href="w3 css/bootstrap.css" rel="stylesheet" id="bootstrap-css"><link rel="stylesheet" type="text/css" href="registration.css">
            <script src="w3 css/javascript.css"></script>
            <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
            <br>
<!-- <marquee> -->
<form id="regForm" name="regForm" method="post" action="#">

        <div class="tab">
        <input type="text" disabled name="txtFN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="First Name" value="<?php echo $_SESSION['txtFN'];?>"> 
        <input type="text" disabled  name="txtMN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Middle Name" value="<?php echo $_SESSION['txtMN'];?>">
        <input type="text" disabled name="txtLN" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Last Name" value="<?php echo $_SESSION['txtLN'];?>">
        <input type="text" disabled name="txtAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 85%;" placeholder="Address" value="<?php echo $_SESSION['txtAddress'];?>"><br><br><br>
        <b>Birthday:</b> 
        <input type="date" disabled name="txtBday" style="text-align: right;font-weight: bolder;font-size: 100%;width: 150px;" placeholder="Birthday" value="<?php echo $_SESSION['txtBday'];?>">
        <br><br><br>
        <input type="text" disabled name="txtOccupation" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Occupation" value="<?php echo $_SESSION['txtOccupation'];?>">
        <input type="text" disabled name="txtCompanyAddress" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Company Address" value="<?php echo $_SESSION['txtCompanyAddress'];?>">
        <input type="text" disabled name="txtSalary" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-left: 7.5%;float: left;" placeholder="Salary" value="<?php echo $_SESSION['txtSalary'];?>">
        <input type="text" disabled name="txtCD" style="text-align: center;font-weight: bolder;font-size: 100%;width: 35%;margin-right: 7.5%;float: right;" placeholder="Contact Number" value="<?php echo $_SESSION['txtCD'];?>">

       <br> <br> <br> 
        </div></div></span></div>

        <div class="tab">
            proof

            <br><br><br><br><br><br>
        </div>

        <div class="tab">
            bank account details


            <br><br><br><br><br><br>
        </div>

       <div class="tab">

    <input type="text" disabled name="txtFN" placeholder="Username" required style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;margin-top: -1%;width: 50%"><br><br>
    <input type="text" disabled name="txtFN" placeholder="Password" required style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;width: 50%"><br><br>
    <input type="text" disabled name="txtFN" placeholder="Confirm Password" required style="font-size: 100%;padding: 2%;text-align: center;background-color: #fffff2;width: 50%"><br><br><br><br><br><br>

</div>
  

        <div class="tab">
        Summary   
    
    <br><br><br><br><br><br>
  </center></div>



 



 

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

<!-- ====================================================================================== -->





<!-- <div class="w3-content" style="max-width:75%;margin-top:80px;margin-bottom:40px">

  <div class="w3-panel">


<div style="padding: 1%; border: 2px solid #242424;border-radius: 8px;word-wrap: break-word;background-color:  #E6E4E8;">
  <center>
  
  <span> -->



<!-- </span></center></div></div></div>
 -->

</body>

<br><br><br><br><br><br>
