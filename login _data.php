<?php
session_start();
@include('db.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM 'user' WHERE email = '$email' && password = '$password'";
    $res = mysqli_query($conn ,$query);

    if(!$res){
        echo ("query failed". myqli_error($conn));
    }

    else{
        $row =mysqli_num_rows($res);
        if($row > 0){
        $_SESSION['email'] = $email;
        echo "query succesfully run";
        header("location:./index.php");
        }

        else{
            echo "query is not run";
            header("location:./register.php");
        }
        
    }
}
?>














