<?php
session_start();

?>
 <?php

$arr=array();
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
        
    }

    function current() {
        return parent::current();
        
    }

    function beginChildren() {
    }

    function endChildren() {
    }
}

$servername = "localhost";
$username = "root";
$password = "iiits@123";
$dbname = "myDBPDO";
$name=$_POST["uname"];
$pass=$_POST["psw"];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT uname,pword,fname
 FROM mytable WHERE uname='$name' ");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
    //echo count($result);
    $x=0;
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      //  echo $v;
        $x=$x+1;
        if($x==2)
        {
         $y=$x;
         $pass1=$v;
        }
        if($x==3)
        {
         $z=$x;
         $f1=$v;
        }
    }
     
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
        $_SESSION["fn"]=$f1;
        $_SESSION["na"]=$pass1;
        $_SESSION["pa"]=$pass;
?>




<?php
  
  $pass=$_SESSION["pa"];
  $pword=$_SESSION["na"];
 if($pass!='')
 {
 if($pword==$pass)
 {
  header("Location:home3.html");
  exit;
 }
 else
 {
    header("Location:home2_2.html");
   exit; 
 } 
 }
?> 


<?php
 $f1=$_SESSION["fn"];
 echo $f1;
?>
