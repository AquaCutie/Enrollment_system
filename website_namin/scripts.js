//Para sa sidebar i2
const navLinks = document.querySelectorAll('.nav-links li a');

// Loop through each link and check if its href matches the current page's path
navLinks.forEach(link => {
  if (link.getAttribute('href') === window.location.pathname) {
    // Add the 'active' class to the link that matches the current page's path
    link.classList.add('active');
  }
});
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });