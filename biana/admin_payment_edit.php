    <body style="background-color: #80B763">
      <?php
session_start();
error_reporting(0);




$txtpay = $_POST['txtpay'];
$txtamt = $_POST['txtamt'];
$txtchange = $_POST['txtchange'];
$txtBalance = $_POST['txtBalance'];
 $_SESSION['txtpay']=$txtpay;
 $_SESSION['txtamt']=$txtamt; 
 $_SESSION['txtchange']=$txtchange;
  $_SESSION['txtBalance']=$txtBalance;


      

$servername = "localhost";
$username = "root";
$password = "";
    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$stmt = $conn->query("SELECT Loan_Amount FROM transaction_history WHERE User_ID=".$_GET['id']);
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  // print "Name: <p>{".$row[0] $row[1]."}</p>";
    $_SESSION['txtamt']=$row[0];
    
    
}

  
// $stmt = $conn->query("SELECT PaymentNum FROM payment WHERE User_ID=".$_GET['id']);
// while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
//   // print "Name: <p>{".$row[0] $row[1]."}</p>";
//     $_SESSION['txtPN']=$row[0];
    
    
// }

// $stmt = $conn->query("SELECT * FROM login WHERE  User_ID=".$_GET['id']);
// while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
//   // print "Name: <p>{".$row[0] $row[1]."}</p>";
//     $_SESSION['txtUN']=$row[1];
//     $_SESSION['txtPW']=$row[2];
  
    
// }

//////////////////////////////// this is for id

  /////////////////////////////
  $btnSubmit = $_POST['btnSubmit'];

        if ($_SERVER['REQUEST_METHOD']=="POST") {
                if ($btnSubmit == "PAY") {
           
                    $_SESSION['txtchange'] = $txtpay -  $_SESSION['txtamt'] ; 
                    $_SESSION['txtBalance'] = $_SESSION['txtamt'] - $_SESSION['txtchange'];

                    $txtchange = $_SESSION['txtchange'];
                    $txtBalance = $_SESSION['txtBalance'];


                    // echo $_SESSION['txtchange']." | ".$_SESSION['txtBalance'];



                                // $DBconn -> exec("INSERT INTO reference_credentials VALUES('','$User_ID','$txtRName3','$txtRRel3','$txtRAdd3')");


                       }else{

                        echo "CANCEL";
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
            <br>
        <input type="text"  name="search" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="User ID" value=""> <input type="submit"  name="btnSubmit" style="text-align: center;font-weight: bolder;font-size: 100%;" value="SEARCH"> <br><br><br>
        <b> Payment Number : </b> <input type="text"  name="Payment Number" style="text-align: center;font-weight: bolder;font-size: 100%;" value="<?php echo $_SESSION['txtPN'];?>">  <br> <br> <br> <br>
        <b> Amount : </b> <input type="text"  disabled="True" name="Amount" style="text-align: center;font-weight: bolder;font-size: 100%;" value="<?php echo $_SESSION['txtamt'];?>"> <?php echo str_repeat("&nbsp;",30);?>
        <b> Payment:  </b> <input type="text"   name="txtPayment" style="text-align: center;font-weight: bolder;font-size: 100%;" placeholder="Payment" value="<?php echo $_SESSION['txtpay'];?>"> <br> <br> <br> <br>
        <b> Change :  </b> <input type="text" disabled="True" name="txtchange" style="text-align: center;font-weight: bolder;font-size: 100%;" value="<?php echo $_SESSION['txtchange'];?>"> <?php echo str_repeat("&nbsp;",25);?>
        <b> Balance : </b> <input type="text"  disabled="True"name="txtBal" style="text-align: center;font-weight: bolder;font-size: 100%;width: 25%;" value="<?php echo $_SESSION['txtBalance'];?>"><br><br><br><br>
       <br><br><br><br></div></span></div></div></div>
        <!-- ///////////////////////////////// -->

</div></span></div></div></div>

<center>
        <div style="">       
                <input type="submit" name="btnSubmit" value="PAY" style="text-align: center;font-weight: bolder;font-size: 20px;border-radius: 10px;padding: 10px;">
        <input type="submit" name="btnSubmit" value="CANCEL" style="text-align: center;font-weight: bolder;font-size: 20px;border-radius: 10px;padding: 10px;">
        </div><br><br>
 