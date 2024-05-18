<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav class="navbar">

    <ul>
           <li><a href="#"> Home</a></li>
           <li><a href="#">Ourpartners</a></li>
           <li><a href="#">ExploreActivities</a></li>
           <li><a href="#">Carrier</a></li> 
           <li><a href="tuition_login.php">Register as a Tutor for Free!</a></li> 
           
        </ul>
    </nav>
    <div class="container">
        <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <?php 
                // Establish database connection
                $connection = mysqli_connect('localhost', 'root', '', 'web');

                // Check if connection is successful
                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve form data
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // SQL query to check if email and password match
                    $query = "SELECT * FROM acc WHERE email='$email' AND password='$password'";
                    $result = mysqli_query($connection, $query);

                    // Check if there's a match
                    if (mysqli_num_rows($result) == 1) {
                        // Authentication successful, redirect to dashboard or home page
                        header("Location: Home.php"); // Change "dashboard.php" to your desired location
                        exit(); // Ensure no further code is executed after redirection
                    } else {
                        // Authentication failed, display error message
                        $error_message = 'Invalid email or password. Please try again.';
                        echo '<p style="color: red;">' . $error_message . '</p>';
                    }
                }

                // Close database connection
                mysqli_close($connection);
            ?>

            <div class="remember-forgot">
                <label class="remember">
                    <input type="checkbox" id="remember" name="remember">
                    Remember me
                </label>

                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>

            <input type="submit" value="Login">
        </form>

        <p>Don't have an account? <a href="#">Register</a></p>
    </div>
    <footer>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <span>CUET CONNECT</span>
    </footer>  

</body>
</html>
