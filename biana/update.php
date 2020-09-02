<?php
    session_start(); 
    try {
        $conn = new PDO("mysql:host=localhost;dbname=dbnila", "root", "");
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_SESSION["account"])) {
            if ($_SESSION["account"] == "admin") {
                $uname=$_SESSION["username"];        
                $query = $conn->prepare("SELECT * FROM personal_info WHERE Username='$uname'");
                $query->execute();
                while($row=$query->fetch(PDO::FETCH_ASSOC)){
                    $fname = $row['GivenName'];
                    $mname = $row['MiddleName'];
                    $lname = $row['LastName'];
                    $cn = $row['Contact'];
                    $uname = $row['Username'];
                    $pass = $row['Password'];
                }
            }
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } 

    CLASS UPDATE{
        function updateacc($fname, $mname, $lname, $cn, $uname, $pass){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=dbnila", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare("UPDATE personal_info SET Contact='$cn', Username='$uname', Password='$pass'WHERE GivenName='$fname' and LastName ='$lname'"); 
                $query->execute();
                echo "<script>alert('Successfully Updated')</script>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        function deleteacc($fname, $mname, $lname, $cn, $uname, $pass){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=dbnila", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare("DELETE FROM personal_info WHERE GivenName='$fname' and LastName ='$lname'"); 
                $query->execute();
                echo "<script>alert('Successfully DELETED')</script>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;

    font-family: 'Dancing Script', cursive;
opacity: .95;

}

form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
}

form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

header {
    margin: 2% auto 10% auto;
    text-align: center;
}

header h2 {
    font-size: 250%;
    font-family: 'Dancing Script', cursive;
    color: #3e403f;
}

header p {letter-spacing: 0.05em;}

.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}

#eye {
    background: #fff;
    color: #333;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Dancing Script', cursive;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}

input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

button {
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
    font-family: 'Dancing Script', cursive;
}
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}

.frgt-pass {background: transparent;}

.sign-up {background: #B8F2E6;}

button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}
  </style>
</head>

<body>
  <div class="overlay">
<form method="POST">
   <div class="con">
       <header class="head-form">
          <h2>Create an Account</h2>
       </header><p><br></p>
       <br>
       <div class="field-set">
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="fname" type="text" placeholder="FirstName" value = "<?php echo @$fname ?>" disabled="true">
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="mname" type="text" placeholder="MiddleName" value = "<?php echo @$mname ?>" disabled="true">
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="lname" type="text" placeholder="LastName" value = "<?php echo @$lname ?>" disabled="true">
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="cn" type="text" placeholder="Contact:" value = "<?php echo @$cn ?>"><br><br>
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="uname" type="text" placeholder="Username:" value = "<?php echo @$uname ?>">
        <span class="input-item"><i class="fa fa-user-circle"></i></span>
            <input class="form-input" name="pass" type="text" placeholder="Password:" value = "<?php echo @$pass ?>">
       </div>
      
       <div class="other">

            <input type="submit" class="btn submits sign-up" name="done" value="Edit">
            <input type="submit" class="btn submits sign-up" name="delete" value="DELETE">
          <button type="submit" class="btn submits sign-up" name="neww">Back
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          </button>
       </div>
        
  </div>
</form>
</div> 
  
    <!--script src="js/index.js"></script-->
</body>
</html>
<?php
    extract($_POST);    
    if(isset($done)){
        UPDATE::updateacc($fname, $mname, $lname, $cn, $uname, $pass);
    }else if(isset($delete)){
        UPDATE::deleteacc($fname, $mname, $lname, $cn, $uname, $pass);
    }
?>