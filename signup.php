<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - CUET Connect</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<?php
// Include the nav.php file
include 'nav.php';
?>
<section class="signup">
    <div class="container">
        <h2>Create an Account</h2>
        <p><b>Sign up to CUET Connect to explore activities, find help, showcase talents, and build your network.</b></p>
        <form id="signup-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="send">Sign Up</button>
        </form>
        <div class="or-divider">
            <span>or</span>
        </div>

        <p>Already have an account? <a href="login.php">Log in</a></p>
    </div>

    <div class="php-output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $connection = mysqli_connect('localhost', 'root', '', 'web');

            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
                $name = mysqli_real_escape_string($connection, $_POST['name']);
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);

                $check_query = "SELECT * FROM acc WHERE email = '$email'";
                $result = mysqli_query($connection, $check_query);
                if (!$result) {
                    echo "Error: " . $check_query . "<br>" . mysqli_error($connection);
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<p style="color: darkred;">This email is already registered.</p>';
                    } else {
                        $request = "INSERT INTO acc (name, email, password) VALUES ('$name', '$email', '$password')";
                        if (mysqli_query($connection, $request)) {
                            echo '<p style="color: darkgreen;">Record inserted successfully</p>';
                        } else {
                            echo "Error: " . $request . "<br>" . mysqli_error($connection);
                        }
                    }
                }
            } else {
                echo '<p style="color: darkred;">All fields are required</p>';
            }

            mysqli_close($connection);
        }
        ?>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2024 CUET Connect. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
