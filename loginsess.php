<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['user'])) {
    echo "Welcome back, ".$_SESSION['user']."!<br>";
    echo "<a href='connect.php'>Logout</a>";
   
}

// Check if the form has been submitted
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Check if the username and password are correct (this is a very basic example, in real-world applications you should use a database and proper encryption)
    if($_POST['username'] === 'user' && $_POST['password'] === 'password') {
        // Set session variables
        $_SESSION['user'] = $_POST['username'];
        echo "Login successful!<br>";
        echo "<a href='logoutsess.php'>Logout</a>";
        
    } else {
        echo "Invalid username or password.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
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
            <button type="submit" name="submit" value="submit">Register</button>
            <div class="Login here">
                <p>Already have an account? <a href="loginpage.html">Login here</a></p>
    </form>
</body>
</html>