<?php
$localhost='localhost';
$username='root';
$password='';
$db='login';

$conn=new mysqli($localhost,$username,$password,$db);

if($conn->connect_error){
    die("connection Error:".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];



    $sql="INSERT INTO login (Fname,Lname,Email,phone,massage) VALUES ('$fname','$lname','$mail','$phone','$msg')";
    $result=$conn->query($sql);

    if($result===TRUE){
        echo "Login Seccesful";

    }else{
        echo "ERROR: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
