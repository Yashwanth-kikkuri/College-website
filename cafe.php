<?php
include 'cdf.php';  
 $fname=$_POST["opt"];
 $item=$_POST["item"];
$servername = "localhost";
$username = "root";
$password = "iiits@123";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO orders (uname,item,quantity)
    VALUES ('$name','$item','$fname')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo $name;
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;



//header("Location: https://paytm.com/");
exit;




?>
