<?php
@include('db.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM 'students' WHERE id = $id";
    $res = mysqli_querey($conn , $query);


    if(!$res){
        die("query failed".mysqli_error($conn));
    }

    else{
        header("location:./indexphp");
    }
}

?>