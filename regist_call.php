<link rel="stylesheet" href="w3 css/w3.css">

<?php
session_start();
error_reporting(0);


if($_SERVER['REQUEST_METHOD']=='POST'){
 


//$conn = mysqli_connect("localhost", "id4079997_cherrymobileq6i", "iamasinner555", "id4079997_account");





if(empty($_POST["txtFN"]) || empty($_POST["txtMN"]) || empty($_POST["txtLN"]) || empty($_POST["txtCD"]))
{





        
        
        // echo "<script>


        //   window.location.href='#form';


        //   alert('Fields cannot be left empty!');


        // </script>";

        echo "<script>


          window.location.href='#';


          alert('Fields cannot be left empty!');


        </script>";




 //header("Location: #form");



    }else{

$_SESSION['txtFN'] = $_POST['txtFN'];
$_SESSION['txtMN'] = $_POST['txtMN'];
$_SESSION['txtLN'] = $_POST['txtLN'];
$_SESSION['txtCD'] = $_POST['txtCD'];

// $_SESSION['txtBday'] = $_POST['txtBday'];
// $_SESSION['txtAddress'] = $_POST['txtAddress'];
// $_SESSION['txtOccupation'] = $_POST['txtOccupation'];
// $_SESSION['txtCompanyAddress'] = $_POST['txtCompanyAddress'];
// $_SESSION['txtSalary'] = $_POST['txtSalary'];

// $_SESSION['txtRRel1'] = $_POST['txtRRel1'];
// $_SESSION['txtRRel2'] = $_POST['txtRRel2'];
// $_SESSION['txtRRel3'] = $_POST['txtRRel3'];
// $_SESSION['txtRName1'] = $_POST['txtRName1'];
// $_SESSION['txtRName2'] = $_POST['txtRName2'];
// $_SESSION['txtRName3'] = $_POST['txtRName3'];
 


//$conn = mysqli_connect("localhost", "id4079997_cherrymobileq6i", "iamasinner555", "id4079997_account");

  echo "<script>

          window.location.href='registration.php';

        </script>";
//$result = mysql_query($query);

//mysqli_execute($query);

// while ($name_row = mysql_fetch_row($query)) {
// print(“{$name_row[0]} {$name_row[1]} {$name_row[2]}<BR>\n”);
// }


 

        //echo "<script>alert('Thanks for registering!');</script>";




 


    }

  }

?>