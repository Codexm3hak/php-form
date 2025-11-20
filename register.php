
  <?php 
  
  @include('header.php')
  ?>
  
     <div class="container mt-5 ">
      <form action="./add-register.php"method="POST">
     <h1 class="text-center">Register Form</h1>
        <div>
    <label for="">Name :</label>
     <input type="text" name="" placeholder="Enter your name" class="form-control">
        </div>
              <div>
    <label for="">Email :</label>
     <input type="text" name="" placeholder="Enter your email" class="form-control">
        </div>

              <div>
    <label for="">Addresss :</label>
     <input type="text" name="" placeholder="Enter your Address" class="form-control">
        </div>

              <div>
    <label for="">Password :</label>
     <input type="text" name="" placeholder="Enter your password" class="form-control">
        </div>


              <div>
    <label for="">Phone :</label>
     <input type="text" name="" placeholder="Enter your phone" class="form-control">
        </div>

        <button class="btn btn-primary" name="register">
            Register
        </button>

     </div>
