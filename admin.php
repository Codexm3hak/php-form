<?php @include('header.php'); ?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Student List</h2>
    <button class = "btn btn-primary"><a href=./add-student.php class="text-light">
    add student</a></button>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Batch</th>
      <th scope="col">Faculty</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  @include('db.php');

  $query = "SELECT * FROM students;";

  $res=mysqli_query($conn , $res);

  if(!$res)
  {
    die("query Failed" . mysqli_error($conn));
  }
  

  else
  {
 while($row = mysqli_fetch_assoc($res)){
  echo
  "
  <tr>
  <td>$row[Id]</td>
  <td>$row[Name]</td>
  <td>$row[Email]</td>
  <td>$row[Batch]</td>
  <td>$row[Faculty]</td>
  <td>$row[Action]</td>
  </tr>
  ";
 }
  }
  
  ?>