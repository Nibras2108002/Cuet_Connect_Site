<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CUET Connect - Student Jobs & Opportunities</title>
  <link rel="stylesheet" href="job.css">
</head>
<body>
<?php
// Include the nav.php file
include 'nav.php';
?>

  <main>
    <section class="hero bg-primary">
      <div class="hero-content">
        <h1 class="text-white">Unlock Your Potential at CUET Connect</h1>
        <p class="text-white">Find freelance jobs, internships, and opportunities tailored for CUET students.</p>
        <button class="btn-secondary">Explore Jobs Now</button>
      </div>
    </section>

    <section class="job-categories bg-secondary">
      <h2>Available Job Categories</h2>
      <ul>
        <li><a href="#">Graphics Design</a></li>
        <li><a href="#">Event Management</a></li>
        <li><a href="#">Photography</a></li>
        <li><a href="#">Content Writing</a></li>
        <li><a href="#">Web Development</a></li>
      </ul>
    </section>

    <section class="job-postings bg-terinary">
      <h2>Recently Posted Jobs</h2>
      <article class="job-post">
        <h3>Graphic Designer Needed for Social Media Campaigns</h3>
        <p>We are looking for a creative and experienced graphic designer to create engaging visuals for our social media platforms.
          <a href="graphic-designer-post.html">Read More</a></p>
      </article>
    </section>

    <section class="student-application bg-quaternary">
      <h2>Showcase Your Skills</h2>
      <p>Let potential clients discover your talents!</p>
      <form action="submit_application.php" method="post">
        <div class="form-group">
          <label for="job_title">Job Title:</label>
          <input type="text" name="job_title" id="job_title" required>
        </div>
        <div class="form-group">
          <label for="skills">Your Skills:</label>
          <textarea name="skills" id="skills" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <label for="experience">Experience (Optional):</label>
          <textarea name="experience" id="experience" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="portfolio_link">Portfolio Link (Optional):</label>
          <input type="url" name="portfolio_link" id="portfolio_link">
        </div>
        <button type="submit" class="btn-primary">Submit Application</button>
      </form>
    </section>

    <section class="contact-us bg-primary">
      <h2>Contact Us</h2>
      <p>Have any questions or need help finding the perfect job?</p>
      <ul>
        <li><a href="mailto:cuetconnect@cuet.ac.bd" class="text-white">cuetconnect@cuet.ac.bd</a></li>
        <li><a href="tel:+8801XXXXXXXXX" class="text-white">+880 1XXXXXXXXX</a></li>
      </ul>
    </section>

  </main>

  <footer>
    <p class="text-white">&copy; CUET Connect 2024</p>
  </footer>
</body>
</html>