<?php  
 $to=$_POST["option"];
 $complaint=$_POST["comp"];
 $mail=$_POST["email"]; 

    $servername = "localhost";
    $username = "root";
    $password = "iiits@123";
    $dbname = "myDBPDO";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO complaint (email,per,complaint)
    VALUES ('$mail', '$to', '$complaint')";

    $conn->exec($sql);
        header("Location:home3.html");
    $conn = null;

?>
