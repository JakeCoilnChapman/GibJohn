document.addEventListener("DOMContentLoaded", function () {
    // Wait for the DOM to be fully loaded

    // Gradually increase the opacity
    setTimeout(function () {
        document.body.style.opacity = 1;
    }, 100); // You can adjust the delay time as needed
});
function signup() {
    const email = document.getElementById("email").value;
    const username = document.getElementById("signup-username").value;
    const password = document.getElementById("signup-password").value;

    // Example validation for email (you can add more)
    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
    } else {
        alert("Sign up successful!");
        // You can redirect or perform other actions after a successful sign-up
    }
}

function showLoginForm() {
    document.getElementById("login-form").style.display = "block";
    document.getElementById("signup-form").style.display = "none";
}

function showSignupForm() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function showSignupForm() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
}


