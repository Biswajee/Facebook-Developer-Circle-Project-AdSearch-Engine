<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="phpconnect";
$n=$_POST['usr'];
$m=$_POST['pwd'];
$connect=mysqli_connect($hostname, $username, $password, $databasename);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query="insert into logname values(0,'$n','$m',now())";



if ($connect->query($query) === TRUE) {
	header( 'Location: resultpg.html' );
    
} else {
    echo "Error: " . $query . "<br>" . $connect->error;
}


mysqli_close($connect);


?>