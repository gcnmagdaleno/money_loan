<?php
session_start();
error_reporting(0);
include 'admin_header.php';

?>

<style type="text/css">
    
    div{
    background-color: white;
    color: black;
    transition: 1s;
}
</style>
<body><center>
<br><br><br><br><br>

            <section id="content" class="column-right" style="background-color: #80B763;"><br><b style="float: left;">Date
                <input type="date" data-date-inline-picker="true" name="txtBday" style="text-align: right;font-weight: bolder;font-size: 100%;width: 150px;border-radius: 5px;" placeholder="Birthday" value="Birthday" ></b>
            <?php
                include 'admins_trans_due.php';
            ?>



            

        
</article>
<?php
                // include 'footer.php';
            ?>
    




</body>
</html>

