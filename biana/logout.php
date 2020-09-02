<?php

session_start();


/////////////////////SESSION
 $_SESSION['txtFN']="";
 $_SESSION['txtMN']="";
 $_SESSION['txtUN']="";
 $_SESSION['txtPW']="";
 $_SESSION['txtLN']="";
 $_SESSION['txtCD']="";

 $_SESSION['txtBday']="";
 $_SESSION['txtAddress']="";
 $_SESSION['txtOccupation']="";
 $_SESSION['txtCompanyAddress']="";
 $_SESSION['txtSalary']="";

 $_SESSION['txtRRel1']="";
 $_SESSION['txtRRel2']="";
 $_SESSION['txtRRel3']="";
 $_SESSION['txtRName1']="";
 $_SESSION['txtRName2']="";
 $_SESSION['txtRName3']="";
 $_SESSION['txtRAdd1']="";
 $_SESSION['txtRAdd2']="";
 $_SESSION['txtRAdd3']="";

  $_SESSION['IDPath']="";



session_unset();
session_destroy();

echo "<script>window.location.href='../login.php';</script>";
?>