<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="tuition_login.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container">
        <h1>REGISTER AS A TUTOR FOR FREE!</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database configuration
            $servername = "localhost";
            $username = "root"; // Replace with your database username
            $password = ""; // Replace with your database password
            $dbname = "web";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Collect POST data
            $fullname = $_POST['fullname'];
            $department = $_POST['Department'];
            $student_id = $_POST['ID'];
            $level = $_POST['Level'];
            $term = $_POST['Term'];
            $phone_number = $_POST['phonenumber'];
            $verification = $_POST['verification'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];

            // Check if passwords match
            if ($password !== $confirmpassword) {
                echo "<p style='color: red;'>Passwords do not match.</p>";
            } else {
                // Check if the Student ID already exists
                $stmt = $conn->prepare("SELECT student_id FROM tuition WHERE student_id = ?");
                $stmt->bind_param("s", $student_id);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    echo "<p style='color: red;'>Already inserted as tutor!!</p>";
                } else {
                    // Hash the password for security
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    // Prepare and bind
                    $stmt = $conn->prepare("INSERT INTO tuition (fullname, department, student_id, level, term, phone_number, verification, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssssssss", $fullname, $department, $student_id, $level, $term, $phone_number, $verification, $hashed_password);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "<p style='color: green;'>New record created successfully.</p>";
                    } else {
                        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
                    }
                }

                // Close the statement and connection
                $stmt->close();
            }

            $conn->close();
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="Department">Department:</label>
            <input type="text" id="Department" name="Department" required>

            <label for="ID">Student ID:</label>
            <input type="text" id="ID" name="ID" required>

            <label for="Level">Level:</label>
            <input type="text" id="Level" name="Level" required>

            <label for="Term">Term:</label>
            <input type="text" id="Term" name="Term" required>

            <label for="phonenumber">Phone Number:</label>
            <input type="tel" id="phonenumber" name="phonenumber" inputmode="numeric" pattern="[0-9]*" required>

            <label for="verification">Verification Email or Phone:</label>
            <input type="text" id="verification" name="verification" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" id="confirmpassword" name="confirmpassword" required>

            <input type="submit" value="Register Me">

            <p>By clicking registration button, you accept our <a href="#">Terms & Conditions</a>.</p>
        </form>
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
