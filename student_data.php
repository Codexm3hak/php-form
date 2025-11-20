<?php
@include('db.php');

if(isset($_POST['student']))
{
$name =$_POST['name'];
$email =$_POST['email'];
$batch =$_POST['batch'];
$faculty =$_POST['faculty'];


$query ="INSERT INTO `students`(`name`,`email`,`batch`,`faculty`) VALUES
 (`$name`,`$email`,`$batch`,`$faculty`);";


$res =msqli_query($conn, $query);

if($res)
{
    header("location:./index.php");
}
else{
    echo "not register";
}

}
?>