<?php
$servername="localhost";
$username="root";
$password="";
$database="data1";

$conn= new mysqli($servername,$username,$password,$database,3308);

if($conn->connect_error){
    die("connection failed".$con->connect_error);
}
$user=$_POST['user'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$Product=$_POST['Product'];
$Amount=$_POST['Amount'];
// $encryptpass=password_hash($pass,PASSWORD_BCRYPT);

$stmt=$conn->prepare("INSERT INTO checkout(Uname,Email,UAddress,Product,Amount) values(?,?,?,?,?)");
$stmt->bind_param("ssssi",$user,$Email,$Address,$Product,$Amount);

if($stmt->execute()){
    echo "oder placed successfully";
}
else{
    echo $conn->connect_error;
}
$stmt->close();
$conn->close();


?>