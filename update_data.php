<?php
@include('header.php');

@include('db.php');


$row = [];
if(isset($_GET['id']))
{
  $id = $_GET['id']

  $query = "SELECT * FROM 'students' WHERE id = $id;";
  $res = mysqli_query{$conn , $query};


  if($res){
     $row = mysqli_fatch_assoc($res);
     echo "successfully run";
  }

else{
    die("query failed" .mysqli_error($conn));
}
}

if(isset($POST['update-data']))
{
    $name = $_['name'];
    $email = $_['email'];
    $batch = $_['batch'];
    $faculty = $_['faculty'];

    $query ="UPDATE `students` SET `name`=`$name`,`email`=`$email`,
    `batch`=`$batch`,`faculty`=`$faculty` WHERE id = $id";

$res =mysqli_query($conn , $query);

if($res)
{
    echo "student sucessfully update";
    header "location:./index,php";
}

else{
    echo "query_failed"
}

}

<from action="./update_data.php" method="POST">
<div class="container mt-5 ">

     <h1 class="text-center">Update-Student</h1>
        <div>
    <label for="">Name :</label>
     <input type="text" value"<?php echo $row['name']?>"name="name" placeholder="Enter your name" 
     class="form-control">
        </div>
              <div>
    <label for="">Email :</label>
     <input type="text" "<?php echo $row['email']?>"name="email" placeholder="Enter your email" class="form-control">
        </div>

              <div>
    <label for="">Batch :</label>
     <input type="text" "<?php echo $row['batch']?>"name="batch" placeholder="Enter your Address" class="form-control">
        </div>

              <div>
    <label for="">Faculty :</label>
     <input type="text" "<?php echo $row['faculty']?>"name="faculty" placeholder="Enter your password" class="form-control">
        </div>

        <button class="btn btn-primary">
        Add-Student
        </button>

     </div>






?>