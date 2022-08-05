<?php
$data_num = $_POST['number'];
$conn = new mysqli('localhost','root','','my_data');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into data(data_num) values(?)");
    $stmt->bind_param("i",$data_num);
    $stmt->excute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}

?>