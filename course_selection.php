<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course_selection.css">
    <title>Course Selection and Planning | CUET Academic Support</title>
</head>
<body>
    <header class="header fixed">
    <?php
// Include the nav.php file
include 'nav.php';
?>
        <div class="container">
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li><a href="#computer-science">Computer Science</a></li>
                    <li><a href="#electrical-engineering">Electrical Engineering</a></li>
                    <li><a href="#mechanical-engineering">Mechanical Engineering</a></li>
                    <!-- Add more departments as needed -->
                </ul>
            </nav>
            <h1>Course Selection and Planning</h1>
        </div>
    </header>

    <!-- Add the rest of the HTML code here -->
    
  <section class="course-container">
    <div class="container">
      <h2>Select Your Department</h2>
      <div class="course-item">
        <a href="#computer-science">
          <div class="course-content">
            <img src="Cse_card_bg.jpeg" alt="Computer Science" class="course-image">
            <h3 class="text-center">Computer Science</h3>
          </div>
        </a>
      </div>
      <div class="course-item">
        <a href="#electrical-engineering">
          <div class="course-content">
            <img src="eee_card_bg.jpeg" alt="Electrical Engineering" class="course-image">
            <h3 class="text-center">Electrical Engineering</h3>
          </div>
        </a>
      </div>
      <div class="course-item">
        <a href="#mechanical-engineering">
          <div class="course-content">
            <img src="mecha_card_bg.jpg" alt="Mechanical Engineering" class="course-image">
            <h3 class="text-center">Mechanical Engineering</h3>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="department-container">
    <div class="container d-flex justify-content-center">
      <h2 id="computer-science">Computer Science</h2>
      <div class="department-content">
        <h3>Senior Students & Alumni</h3>
        <ul>
          <li>
            <div class="department-member">
              <div class="member-image">
                <img src="student1.jpg" alt="Student 1">
              </div>
              <div class="member-info">
                <h4>Student 1</h4>
                <p>Expertise: Web Development, Data Science, Machine Learning</p>
                <a href="mailto:student1@cuet.edu" class="member-link">Contact</a>
              </div>
            </div>
          </li>
          <li>
            <div class="department-member">
              <div class="member-image">
                <img src="student2.jpg" alt="Student 2">
              </div>
              <div class="member-info">
                <h4>Student 2</h4>
                <p>Expertise: Artificial Intelligence, Cybersecurity, Cloud Computing</p>
                <a href="mailto:student2@cuet.edu" class="member-link">Contact</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </section>

  <section class="help-submission">
    <div class="container">
      <h2>Become a CUET Mentor</h2>
      <p>Help fellow CUET students by sharing your knowledge and expertise.</p>
      <form action="#" method="post">
        <div class="form-group">
          <label for="department">Department:</label>
          <select name="department" id="department">
            <option value="">Select Department</option>
            <option value="computer-science">Computer Science</option>
            <option value="electrical-engineering">Electrical Engineering</option>
            <option value="mechanical-engineering">Mechanical Engineering</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
      </div>
    </section>
  

    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('.header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });
    </script>
</body>
</html>