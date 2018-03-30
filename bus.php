<?php  
 
 $mail=$_POST["email"]; 
$servername = "localhost";
$username = "root";
$password = "iiits@123";
$dbname = "myDBPDO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bus (email)
VALUES ('$mail')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("Location:bus2.html");
?> 





