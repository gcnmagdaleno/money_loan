<body ><center>
<?php
session_start();
error_reporting(0);
echo "<center>";
include 'user_header.php';

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
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db_moneyloan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

    

echo "<center>";
$stmt = $conn->query("SELECT * FROM credentials");
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
  // print "Name: <p>{".$row[0] $row[1]."}</p>";

    echo "<table style='border: solid 2px black;text-align:center;padding:10px;'>
    <tr style='padding:1px;'>
<th style='padding:1px;'>User ID</th>
<th style='padding:1px;'>Name</th>

</tr>";


    echo "<th style='padding:20px;'>$row[0]</th><br>
<th style='padding:20px;'><a href='user_edit.php?id=$row[0]'>$row[1]</a></th>";
// $_SESSION['User_ID']=$row[0];
// echo $_SESSION['User_ID'];

}


// 


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "</table><br><br><br><br><br>";





///////////////

    // $User_ID = "163";

    // $query = "Select * from proof_bill where User_ID = ? "; 
    //         $result = $conn->prepare($query); 
    //         $result->bindParam(1,$User_ID);
    //         $result->execute();
    //         if($rows = $result->fetch())


    //                   {
    //                       $User_ID = $rows["User_ID"];
    //                       $TypeOfBIll = $rows["ID_Bill"];
    //                       $path = $rows["Path"];
    //                  }

    //                  echo "User ID: $User_ID | Type of Bill: $TypeOfBIll | <a href='./uploads/$path'>view image</a>";

                     
?>



