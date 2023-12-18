<?php 
    session_start();
?>
<form class="form" action="" method="post">
  <p class="title">Register </p>
  <p class="message">Signup now and get full access to our app. </p>
      <div class="flex">
      <label>
          <input required="" placeholder="" type="text" class="input" name="fname">
          <span>Firstname</span>
      </label>

      <label>
          <input required="" placeholder="" type="text" class="input" name ="lname">
          <span>Lastname</span>
      </label>
  </div>  
          
  <label>
      <input required="" placeholder="" type="email" class="input" name="email">
      <span>Email</span>
  </label> 
      
  <label>
      <input required="" placeholder="" type="password" class="input" name="password">
      <span>Password</span>
  </label>
  <label>
      <input required="" placeholder="" type="password" class="input" name="cpassword">
      <span>Confirm password</span>
  </label>
  <center><button class="submit" name ="submit"><p>S U B M I T</p></button></center>
  <?php
  $conn = mysqli_connect(
    'localhost','root','','targetclient'
  );
  if(isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpass=$_POST['cpassword'];

    if($password == $confirmpass){
   mysqli_query($conn,"insert into client(firstname,lastname,email,password)VALUES('$firstname','$lastname','$email','$password')");
  echo"<script>alert('Successfully Registered')</script>";
  header("Location: login.php");
  }else{
  echo"<script>alert('Password do not match')</script>";
  }
}
  ?>
  <p class="signin">Already have an acount ? <a href="LOGIN.php">Signin</a> </p>
  <link rel="stylesheet" href="styles.css">
</form>