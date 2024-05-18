<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CUET Sessional Course Resource Hub</title>
  <link rel="stylesheet" href="sessional.css">
  <script src="sessional.js"></script>
</head>
<body>

<header>
  <img src="logo.png" alt="CUET Logo">
  <h1>CUET Sessional Course Resource Hub</h1>
</header>
<?php
// Include the nav.php file
include 'nav.php';
?>
<main>

  <section class="hero">
    <img src="session_bg.jpeg" alt="Engineering Background">
    <div class="hero-text">
      <h2>Power Up Your Sessional Courses!</h2>
      <p>Find and share resources uploaded by seniors and alumni to ace your lab classes.</p>
      <button id="explore-button">Explore Resources</button>
    </div>
  </section>

  <section class="departments">
    <h2>Select Your Department:</h2>
    <ul id="department-list">
      <li data-department="cse">Computer Science & Engineering</li>
      <li data-department="eee">Electrical & Electronic Engineering</li>
      <li data-department="ce">Civil Engineering</li>
      <li data-department="me">Mechanical Engineering</li>
 
    </ul>
  </section>

  <section class="course-resources" id="course-resources">
    <h2>Available Resources:</h2>
    <div class="resource-card">
      <img src="Resourcse_icon.png" alt="Resource Icon">
      <div class="resource-details">
        <h3>Resource Title</h3>
        <p>Resource Description</p>
        <a href="#" class="resource-link">View Resource</a>
      </div>
    </div>
    <!-- Add more resource cards as needed -->
  </section>

</main>

<footer>
  <p>&copy; 2024 - Developed by a Fellow CUET Student</p>
</footer>

</body>
</html>