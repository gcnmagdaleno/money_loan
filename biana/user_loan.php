<?php
include 'user_header.php';
error_reporting(0);

 if ($_SERVER['REQUEST_METHOD']=="POST") {
                
            
    $servername = "localhost";
    $dbname = "db_moneyloan";
    $username = "root";
    $password = "";
    // $termofpayment = $_POST['tof'];
    $loanamount = $_POST['money'];
    $User_ID = $_SESSION['User_ID'];
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d', time());
    $status = "unpaid";

                           $DBconn = new PDO("mysql:host=$servername; dbname=$dbname; ", $username, $password);
                $DBconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_POST['btnsubmit'] == "ACCEPT") {
                if (isset($_POST['agree']) &&  $_POST['agree'] == 'agree'){
                     
                    echo "<center>";
                //     case "Monthly":
                        $money = $_POST['money'];
                        $LOANABLEAMOUNT = $money;
                        $INTEREST = $LOANABLEAMOUNT * 0.08;
                        $TOTALAMOUNT = $LOANABLEAMOUNT + $INTEREST;
                        // echo "<p style='font-size: 40px;'>".$TOTALAMOUNT."</p>"; 
                        $start_date = $date;
                        $date = DateTime::createFromFormat('Y-m-d',$start_date);

                        $date->modify('+1 month');
                         
                        $date2 = $date->format('Y-m-d');
                        // echo $date2;
                // echo "<b style='font-size:50px;background-color:black;color:white;'>accept clicked</b>";
                // $DBconn -> exec("INSERT INTO transaction_history VALUES('','$User_ID', '$TOTALAMOUNT', '$INTEREST','$date', '$loandue', '$status'");

                    //         $time = strtotime($loandue);
 
                    // $newformat = date('Y-m-d',$time);
                     
                    // echo $newformat;

                        $DBconn -> exec("INSERT INTO transaction_history VALUES('','$User_ID', '$TOTALAMOUNT', '$INTEREST',CURDATE(),'$date2', '$status')");

                // echo "$User_ID | $TOTALAMOUNT | $INTEREST | $date | $loandue | $status";
                // echo ;

                     echo "<center style='font-size:30px;'>Transaction Added!</center><script>alert('Transaction Added!');window.location.href='user_trans.php';</script>";

         
                        // break;
                    
                    // case "Weekly":
                    //     $money = $_POST['money'];
                    //     $LOANABLEAMOUNT = $money;
                    //     $INITIALAMOUNT = $LOANABLEAMOUNT / 3;
                    //     $INTEREST = $LOANABLEAMOUNT * 0.0125;
                    //     $TOTALAMOUNT = $INITIALAMOUNT  + $INTEREST; 
                    //   echo "<p style='font-size: 40px;'>".$TOTALAMOUNT."</p>"; 
                    //   $date99 = DateTime::createFromFormat("Y-m-d", $date);
                    //    $loandue= 7 + ($date99->format("d"));
                    //     break;
                    
                }else {
                     echo "<center style='font-size:30px;'>Please check on the Terms and Conditions.</center>";
            }

        }

}
           
    
            

      
?>
<body >

    <form action="#" method="post">
			<section id="content" class="column-right" style="background-color: #80B763">
                	
	<center><b style="font-size: 55px;"><br>Apply for your Loan </b></center> <br><br>
		<article class="expanded">

            	<center>
     	<fieldset>
                                   Loanable Amount  <select name="money" id="time_shift"  style="font-size: 100%; width: 200px;margin-top:10px; ">
                                        <option value="">-- select one --</option>
                                        <option id="0" value="1000">1000</option>
                                        <option id="1" value="1500">1500</option>
                                        <option id="2" value="2000">2000</option>
                                        <option id="3" value="2500">2500</option>
                                        <option id="4" value="3000">3000</option>
                                    </select><br><br><br>
                            
            	   Terms of Payment is Monthly  
                   <!-- <select name="tof" id="tof"  style="font-size: 100%; width: 200px;">
                                        <option value="">-- select one --</option>
                                        <option id="0" value="Weekly">Weekly</option>
                                        <option id="1" value="Monthly">Monthly</option>                                  
                                    </select> -->
                                    </fieldset>
                                    </center>
<h5>Terms and Conditions</h5>

The user of this account is thereby declared as the lendee and Money Loan Inc. is thereby declared as the Lendor.
The lendee agrees to terms and conditions there are in regards to the loan application:
 </p>

<ul>
	<li>That the lendee approves of the interest being added to the loaned amount;</li>
  <li> The interest depends on the terms or modes of payment;</li>
  <li>  The interest for the 30-day term of payment shall be 5% or 0.05 per 30 days while the interest for the weekly term of payment shall be 1.75% or 0.0175 per week. </li>
<li>  The weekly term of payment shall be done by dividing the total amount into 3 weeks and the interest which sums to the product of the total amount and 0.0175 shall be added to the amount of loan divided by 3.</li>
<li> That the lendee acknowledges that the delay in payment in any term of payment shall result to a penalty</li>
<li>  The penalty to be imposed shall amount to the product of the total balance to be paid and 1% (0.01) of it</li>
<li> The penalty shall be applied to each day the user fails to settle the balance. </li>
<li>That the lendee is informed that once the balance has been settled, penalties will be stopped and the lendee may re-apply for a loan. </li>
<li> The amount to be loaned by the user depends on his/her payment history; thus the lendee has a credible payment history then his/her loanable amount may be increased, however, if his/her payment history had become uncredible, a decrease or maintenance in the loanable amount shall take place.</li>
</ul>



		<input type="checkbox" name="agree" value="agree"> I agree on the Terms and Conditions. <br><br>
		


		<input type="submit" name="btnsubmit" value="ACCEPT"> <!-- <a href="#" class="button">Accept</a> -->
		<a href="#" class="button button-reversed">Cancel</a>
		</article>



		</form>

</body>
</html>
