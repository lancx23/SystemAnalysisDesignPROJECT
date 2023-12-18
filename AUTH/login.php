<!DOCTYPE html>
<html>

<head>
    <body>
    <div class="login-box">
        <p>Login</p>
        <form>
          <div class="user-box">
            <input required="" name="" type="text" name="email">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input required="" placeholder="" name="" type="password" name="pass">
            <label>Password</label>
          </div>
          
          <a href="#"><button class="submit" name ="submit"><p>S U B M I T</p></button>
            <span></span>
            <span></span>
            <span></span>
            <span></span>   
            </a>
          <?php
            $conn = mysqli_connect(
                'localhost','root','','targetclient'
              );
            
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
            
                $sql = "SELECT * FROM client WHERE email='$email' AND password='$password'";
                $result = $conn->query($sql);
            
                if ($result->num_rows == 1) {
                    // User is authenticated, redirect to a secure page
                    session_start();
                    $_SESSION['email'] = $email;
                    header("Location: appointment.php");
                } else {
                    echo "Invalid username or password";
                }
            }
          ?>
        </form>
        <p>Don't have an account? <a href="Register.php" class="a2">Sign up!</a></p>
      </div>
      <link rel="stylesheet" href="style.css">
      
</body>

</html>
