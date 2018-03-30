<?php
    
    // validate submission
    
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dd=$_POST["dd"];
    $nn=$_POST["nn"];
    $yyyy=$_POST["yyyy"];
    $uname=$_POST["uname"];
    $pword=$_POST["pword"];
       

    // connect to database
    $servername = "localhost";
    $username = "root";
    $password = "iiits@123";
    $dbname = "myDBPDO";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO mytable (fname, lname, dd, nn, yyyy, uname, pword)
    VALUES ('$fname', '$lname', '$dd', '$nn', '$yyyy', '$uname', '$pword')";

    $conn->exec($sql);
        header("Location:home2.html");
    $conn = null;

?>
