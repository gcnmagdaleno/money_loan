<?php
error_reporting( 0 );
include 'header.php';

?>

<!DOCTYPE html>
<html>
<title>About us</title>
<link rel='shortcut icon' href='favicon.webp' type='image/png'>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='w3 css/w3.css'>

<style>
@font-face {
    font-family: 'mali';
    src: url('./fonts/mali.ttf');
}

html,
body,
h1,
h2,
h3,
h4 {
    font-family: mali;
    scroll-behavior: smooth;
}

.mySlides {
    display: none
}

.w3-tag,
.fa {
    cursor: pointer
}

.w3-tag {
    height: 15px;
    width: 15px;
    padding: 0;
    margin-top: 6px
}

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

.img:hover {
    transition: 1s;
    padding: 10px;
    height: 300px;
    background-color: #c7aae5;

}

.img {
    transition: .5s;

}

.div {

    display: inline-block;
    transition: .5s;

}

#wrapper .text {
    position: relative;
    bottom: 30px;
    left: 0px;
    visibility: hidden;
    transition: .5s;

}

#wrapper:hover .text {
    visibility: visible;
    transition: 3s;

}
</style>

<body style="background-color: #E7D3D5;font-family: 'Mali', cursive;">

    <!-- Content -->
    <div class='w3-content' style='max-width:1100px;margin-top:80px;margin-bottom:40px;'>

        <div class='w3-panel'>

            <div id='left' class='left'
                style='border-left: 20px;border-left-style: solid; border-left-color: #c7aae5;background-color: #ddd6e5;padding: 50px;'>

                <br>
                <center>
                    <div id='wrapper' class='div'>
                        <img class='img' src='gian.webp' align='middle' hspace='0'
                            style='width: 200px;height: 200px;' />
                        <p class='text' style='color: black;font-weight: bolder;font-size: 20px;'>Gian</p>
                    </div>

                    <div id='wrapper' class='div'>
                        <img class='img' src='abigail.webp' align='middle' hspace='0'
                            style='width: 200px;height: 200px;' />
                        <p class='text' style='color: black;font-weight: bolder;font-size: 20px;'>Abi</p>
                    </div>

                    <div id='wrapper' class='div'>
                        <img class='img' src='b.webp' align='middle' hspace='0'
                            style='width: 150px;height: 145px;margin-left:22px;' />
                        <p class='text' style='color: black;font-weight: bolder;font-size: 20px; margin-top: 45px;'>Joy
                        </p>
                    </div>
                    <br><br>
                </center>
                <h2>Gian Carlo Magdaleno</h2>
                <p>Role: Lead Programmer</p><br>
                <h2>Abigail Anne Santos</h2>
                <p>Role: Designer</p><br>
                <h2>Florence Joy Biana</h2>
                <p>Role: Designer</p><br><br>
                <center>
                    <h1>Money Loan</h1>

                    <h5><b>Vision and Mission</b></h5>
                    <p>As a locally-owned community bank, our mission is to provide high-quality financial services to
                        each of our customers in a resCustomer Service - Our focus has, and always will be the customer.
                        We believe in treating each of our customers in a manner that we would want to be treated, and
                        strive to achieve that goal on a daily basis.ponsible and ethical manner using sound,
                        time-tested banking practices. We strive to enhance our communities by building relationships
                        which focus on the economic development in our communities achieved by added services and
                        comprehensive financial solutions.</p> <br>

                    <h5><b>Our Values</b></h5>
                    <ul>
                        <li><b>Customer Service</b> - Our focus has, and always will be the customer. We believe in
                            treating each of our customers in a manner that we would want to be treated, and strive to
                            achieve that goal on a daily basis.</li>

                        <li><b>Integrity</b> - We follow the highest standard of corporate governance to ensure growth
                            and earn our customers’ faith. We are dedicated to following the Laws, Rules and Ethical
                            principles that govern us to provide our customers with the peace of mind they deserve.</li>

                        <li><b>Community Commitment</b> - We take great pride in building life long relationships with
                            our customers and our communities. Our employees are active in many different organizations
                            that enhance the quality of life for individuals in the community. We believe reinvesting in
                            the community will bring long-term social and economic gains that are critical to the
                            success of community banks.</li>

                        <li><b>Independence</b> - We are locally owned and operated, and make our decisions with our
                            customers in mind. Our employees constantly work to improve the products and financial
                            services that are offered to enhance our customers' banking experience.
                        </li>




                    </ul>

                </center>

                </span>
            </div>





        </div>
    </div>
    <!-- <a name="txtFeedback"> -->
        <center>

            <br><br><br><br>
            <form action="#" method="post">

                <?php

  if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (($_POST['txtFeedback']=="")||(($_POST['txtFeedback']=="Can not be empty"))||((trim($_POST['txtFeedback'])==""))) {
      $txtFeedback = "Can not be empty";
      // echo "<script>window.location.href='#txtFeedback';</script>";
        echo "";
    }else{
      // echo "<script>window.location.href='#';</script>";
      echo "";
    }
  }

  ?>
                <!-- <input type="text" name="txtFeedback" style="width: 50%;padding: 20px;height: 50% ;background-color: #edecbb;color: #fe9500 ;font-size: 35px;border-radius: 50% 50% 0% 0%;" value="<?php echo $txtFeedback; ?>"><br> -->

                <textarea name="txtFeedback"
                    style="width: 50%;padding: 20px;height: 50% ;background-color: #edecbb;color: #fe9500 ;font-size: 35px;border-radius: 20% 20% 0% 0%;resize: none;"
                    placeholder="&#10;&#10;Write your feedbacks, comments, suggestions or whatever you want"><?php echo $txtFeedback; ?></textarea><br>


                <input type="submit" name="submit" value="SUBMIT"
                    style="width: 50%;padding: 10px; background-color: #edecbb;color: #fe9500 ;font-size: 35px;border-radius: 0% 0% 100% 100%;"><br><br>



            </form>

        </center>
        <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $servername = "localhost";
    $dbname = "db_moneyloan";
    $username = "root";
    $password = "";
 
    $txtFb = $_POST['txtFeedback'];


     try {
                $DBconn = new PDO("mysql:host=$servername; dbname=$dbname; ", $username, $password);
                $DBconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                 $DBconn -> exec ("INSERT INTO feedback VALUES('$txtFb')");   
        echo  "<script>alert('Feedback saved!')</script>";
       
            }
            catch(PDOException $e) {
                // echo "Error: " . $e->getMessage();
            }
        }
 


    ?>


        <?php 

include 'footer.php';

?>