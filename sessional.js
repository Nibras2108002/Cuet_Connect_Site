document.addEventListener("DOMContentLoaded", function () {
    const exploreButton = document.getElementById("explore-button");
    const departmentList = document.getElementById("department-list");
    const courseResources = document.getElementById("course-resources");
  
    exploreButton.addEventListener("click", function () {
      departmentList.style.display = "flex";
    });
  
    departmentList.addEventListener("click", function (event) {
      if (event.target.tagName === "LI") {
        loadResources(event.target.dataset.department);
      }
    });
  
    function loadResources(department) {
      courseResources.innerHTML = `
        <h2>Resources for ${department.toUpperCase()}:</h2>
        <ul>
          <li><a href="#">Resource 1</a></li>
          <li><a href="#">Resource 2</a></li>
          <li><a href="#">Resource 3</a></li>
        </ul>
      `;
    }
  });