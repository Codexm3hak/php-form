<?php
@include('db.php');

if(isset($_POST['register'])){

$name =$_POST['name'];
$email =$_POST['email'];
$address =$_POST['address'];
$password =$_POST['password'];
$phone =$_POST['phone'];


$query = "INSERT INTO `user`(`name`,`email`,`address`,`password`,`phone`) VALUE
(`$name`,`$email`,`$address`,`$password`,`$phone`);";


$res =mysqli_query($conn , $query);

if($res)
{
    echo "sucessfully inserted";
}
else{
    echo "not register";
}
}


?>