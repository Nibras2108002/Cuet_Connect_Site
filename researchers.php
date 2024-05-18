<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CUET Connect: Find Your Research Partner</title>
  <link rel="stylesheet" href="research_collab.css">
</head>
<body>
  <header>
    <img src="logo.png" alt="CUET Logo">
    <h1>CUET Connect: Research Partner Finder</h1>
  </header>
  <?php
// Include the nav.php file
include 'nav.php';
?>
  <main>
    <section class="hero">
      <img src="researchers_bg.jpeg" alt="Research Background">
      <div class="hero-text">
        <h2>Find Your Perfect Research Partner</h2>
        <p>Connect with CUET alumni, seniors, or batchmates for collaborative research projects.</p>
        <button id="explore-button">Start Connecting</button>
      </div>
    </section>

    <section class="find-researcher">
      <h2>Find a Research Partner</h2>
      <form>
        <div class="form-group">
          <label for="research-field">Research Field:</label>
          <select id="research-field" name="research-field">
            <option value="">Select a Field</option>
            <option value="engineering">Engineering</option>
            <option value="computer-science">Computer Science</option>
            <option value="social-sciences">Social Sciences</option>
            <option value="life-sciences">Life Sciences</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="keywords">Keywords (Optional):</label>
          <input type="text" id="keywords" name="keywords" placeholder="Enter keywords (e.g., machine learning, sustainability)">
        </div>
        <button type="submit">Find Researchers</button>
      </form>
    </section>

    <section class="researcher-profiles">
      <h2>Featured Researcher Profiles</h2>
      <div class="profile-card-container">
        <div class="profile-card">
          <img src="Azad_Sir.jpg" alt="Researcher Profile">
          <h3>Dr. Jane Doe</h3>
          <p>Department of Computer Science</p>
          <p>Research Interests: Artificial Intelligence, Machine Learning</p>
          <a href="#">View Profile</a>
        </div>
        <div class="profile-card">
          <img src="Saiful_sir.jpg" alt="Researcher Profile">
          <h3>Prof. John Smith</h3>
          <p>Department of Electrical Engineering</p>
          <p>Research Interests: Robotics, Automation</p>
          <a href="#">View Profile</a>
        </div>
        <div class="profile-card">
          <img src="Mamun_Sir.jpg" alt="Researcher Profile">
          <h3>Prof. Mark Johnson</h3>
          <p>Department of Mechanical Engineering</p>
          <p>Research Interests: Thermodynamics, Fluid Mechanics</p>
          <a href="#">View Profile</a>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <h2>What Others Say</h2>
      <div class="testimonial">
        <p>"CUET Connect helped me find the perfect research partner for my final year project. We had excellent synergy and completed our research with great success!"</p>
        <span>- John Doe, Electrical Engineering (Graduated 2023)</span>
      </div>
      <div class="testimonial">
        <p>"Connecting with a senior researcher on CUET Connect allowed me to gain valuable insights and guidance for my research paper. I highly recommend this platform!"</p>
        <span>- Jane Smith, Computer Science & Engineering (3rd Year)</span>
      </div>
    </section>

    <section class="call-to-action">
      <h2>Ready to Find Your Research Partner?</h2>
      <a href="#">Create Your Profile Now</a>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 - Developed by a Fellow CUET Student</p>
  </footer>
</body>
</html>
