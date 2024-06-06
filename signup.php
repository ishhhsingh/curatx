<?php
session_start();

if(isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST['signup'])) {
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    // Perform validation on username and password, e.g., check for empty fields

    // Connect to database (replace 'localhost', 'username', 'password', 'your_database' with your actual database details)
    $conn = mysqli_connect('localhost', 'root', '', 'root') or die('Connection Failed' . mysqli_connect_error());

    // Check if username already exists
    $query = "SELECT * FROM data WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $error_message = "Username already exists. Please choose another.";
    } else {
        // Insert new user into database
        $query = "INSERT INTO `data`(`Email`, `Phone No`, `Password`, `Confirm Password`) VALUES ('$email','$phno','$password','$confirmpassword')";
        if(mysqli_query($conn, $query)) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit;
        } else {
            $error_message = "Error creating user.";
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 90%;
  padding: 0 10px;
}

body::before {
  content: "";
  position: absolute;
  width: 110%;
  height: 110%;
  background: url("img/b1.jpg"), #000;
  background-position: center;
  background-size: cover;
}

.container {
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(124, 121, 121, 0.5);
  backdrop-filter: blur(7px);
  -webkit-backdrop-filter: blur(7px);
}

form {
  display: flex;
  flex-direction: column;
}

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #000;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #000;
  margin: 15px 0;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #000;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #000;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #000;
}

#Save-login {
  accent-color: #000;
}

.forget label {
  display: flex;
  align-items: center;
}

.forget label p {
  margin-left: 8px;
}

.container a {
  color: #060505;
  text-decoration: none;
}

.container a:hover {
  text-decoration: underline;
}

button {
  background: #f6f3f3;
  
  font-weight: 600;
  border: black;
  padding: 12px 20px;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}

button:hover {
  color: #000;
  border-color: #000;
  background: rgba(0, 0, 0, 0);
}

#Create-account {
  text-align: center;
  margin-top: 30px;
  color:    #000;
  background: rgba(0, 0, 0, 0);
}

    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
    <?php if(isset($error_message)) echo "<p>$error_message</p>"; ?>
        <form action="" method="post">
            <h2>Sign Up</h2>
            <div class="input-field">
                <input type="text" name="email" id="email" required />
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="phno" name="phno" id="phno" required/>
                <label for="phno">Phone</label>
            </div>
            <div class="input-field">
              <input type="password" name="password" id="password" required />
              <label for="password">Password</label>
          </div>
          <div class="input-field">
            <input type="confirmpassword" name="confirmpassword" id="confirmpassword" required/>
            <label for="confirmpassword">Confirm</label>
        </div>
            <button type="submit" name="signup" value="Sign Up">Register</button>
            <div class="Login here">
                <p>Already have an account? <a href="loginpage.php">Login here</a></p>
            </div>
        </form>
    </div>
</body>
    </html>