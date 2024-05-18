
<?php
include 'nav.php';

// Function to resize image
function resizeImage($imagePath, $width, $height) {
    list($origWidth, $origHeight) = getimagesize($imagePath);
    $ratio = $origWidth / $origHeight;

    if ($width / $height > $ratio) {
        $width = $height * $ratio;
    } else {
        $height = $width / $ratio;
    }

    $imageResized = imagecreatetruecolor($width, $height);
    $imageTmp = imagecreatefromjpeg($imagePath);
    imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, $width, $height, $origWidth, $origHeight);
    imagejpeg($imageResized, $imagePath, 100);
    imagedestroy($imageResized);
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $contact_info = $_POST['contact_info'];
    $image_url = "";

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'uploads/';
        $target_file = $uploadDir . basename($_FILES["image"]["name"]);

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                resizeImage($target_file, 500, 500);
                $image_url = $target_file;
            } else {
                echo "<p style='color: red;'>Sorry, there was an error uploading your file.</p>";
            }
        } else {
            echo "<p style='color: red;'>File is not an image.</p>";
        }
    }

    // Insert post into database
    $stmt = $conn->prepare("INSERT INTO tuition_posts (title, description, contact_info, image_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $contact_info, $image_url);

    if ($stmt->execute()) {
        echo "<p style='color: green;'>New post created successfully.</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Fetch tuition posts from database
$sql = "SELECT * FROM tuition_posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUITION_POSTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="tuition.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">TUITION HUNTING</h1>
            <nav>
                <ul>
                    <li><a href="#design">Recent Tuition</a></li>
                    <li><a href="#post-tuition">Post Tuition</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="container">
            <h1 class="banner-title">Find Your Ideal Tuition</h1>
            <p class="banner-description">Get the latest tuition posts and share your own.</p>
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </section>

    <section class="design" id="design">
        <div class="container">
            <h2 class="section-title">Recent Tuition Posts</h2>
            <div class="design-content">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="design-item">';
                        echo '<div class="design-img">';
                        echo '<img src="' . $row["image_url"] . '" alt="--">';
                        echo '<span><i class="far fa-heart"></i>' . $row["likes"] . '</span>';
                        echo '</div>';
                        echo '<div class="design-title">';
                        echo '<a href="#">' . $row["title"] . '</a>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '<div class="design-contact">Contact: ' . $row["contact_info"] . '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No tuition posts found.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <section class="post-tuition" id="post-tuition">
        <div class="container">
            <h2 class="section-title">Post a New Tuition</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="post-form">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="contact_info">Contact Info:</label>
                <input type="text" id="contact_info" name="contact_info" required>
                <label for="image">Image (optional):</label>
                <input type="file" id="image" name="image">
                <input type="submit" value="Post Tuition" class="submit-btn">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 Tuition Hunting. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>