<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

//Database connection
$conn = new mysqli('localhost','root','','stock');
if($conn->connect_error){
    die('connection Faild  :  ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration (name, email,number)
    values(?,?,?) ");
    $stmt->bind_param("ssi",$name,$email,$number);
    $stmt->execute();
    echo "registration SUccessfully...";
    $stmt->close();
    $conn->close();
}
    
?>