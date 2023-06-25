<?php
$Firstlname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Idnumber=$_POST['id'];
$Phonenumber=$_POST['phone'];
$Password=$_POST['pass'];
$Confirmpassword=$_POST['cpass'];
$gender=$_POST['gender'];
$conn=new mysqli('localhost','root','','customers');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect-error);
}
else{
    $stmt=$conn->prepare("insert into customers(fistname,lastname,idnumber,phonenumber,password,confirmpassword,gender)
    values(?,?,?,?,?)");
    $stmt->bind_param ("ssiisss",$firstname,$lastname,$idnumber,$phonenumber,$Password,$Confirmpassword,$gender);
    $stmt->execute();
    echo "Registration successful";
    $stmt->close();
    $conn->close();
}
?>