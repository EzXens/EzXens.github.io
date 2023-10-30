function changeBg() {
    const gambar = [
      'url("bg/1.jpeg")',
      'url("bg/2.jpg")',
      'url("bg/3.jpg")',
      'url("bg/4.jpg")',
      'url("bg/5.jpg")',
      'url("bg/6.png")',
      'url("bg/7.jpg")',
    ];
  
    const body = document.body;
  
    const bg = gambar[Math.floor(Math.random() * gambar.length)];
  
    // Set the background image for the body element
    body.style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), ' + bg;
  }
  
  // Call the changeBg function after the page is loaded
  window.addEventListener('load', changeBg);
  
  // Call the changeBg function every 5 seconds
  setInterval(changeBg, 5000);
  
  document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const loginAdminForm = document.getElementById("login_admin-form");
    const signupForm = document.getElementById("signup-form");
    const signupLink = document.getElementById("signup-link");
    const adminLink = document.getElementById("admin-link");
    const backToMain = document.getElementById("back-to-main");
  
    signupLink.addEventListener("click", function (e) {
      e.preventDefault();
      loginForm.style.display = "none";
      loginAdminForm.style.display = "none";
      signupForm.style.display = "block";
      backToMain.style.display = "block";
    });

    adminLink.addEventListener("click", function () {
      loginForm.style.display = "none";
      loginAdminForm.style.display = "block";
      signupForm.style.display = "none";
      backToMain.style.display = "block";
    });
  
    backToMain.addEventListener("click", function () {
      loginForm.style.display = "block";
      loginAdminForm.style.display = "none";
      signupForm.style.display = "none";
      backToMain.style.display = "none";
    });
  });
  