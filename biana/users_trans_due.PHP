<body >
<?php
echo "<center>";

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
  

    


echo "</table><br><br><br><br><br><table style='border: solid 2px black;text-align:center;padding:10px;'>
    <tr style='padding:10px;'>
<th style='padding:20px;'>Reference Number</th>
<th style='padding:20px;'>User ID</th>
<th style='padding:20px;'>Loan Amount</th>
<th style='padding:20px;'>Loan Date</th>
<th style='padding:20px;'>Loan Due</th>
<th style='padding:20px;'>Status</th>
</tr>";
date_default_timezone_set('Beijing/Soul');
$date = date('m-d-Y', time());
// echo $date;
 $stmt = $conn->prepare("SELECT * FROM transaction_history"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
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



