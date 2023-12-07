document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const regForm = document.getElementById("reg-form");

    // Initially, hide the regForm
    regForm.style.display = "none";

    // Function to toggle between login and reg forms
    function toggleForms() {
        loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
        regForm.style.display = regForm.style.display === "none" ? "block" : "none";
    }

    // Attach the toggleForms function to the new-acc button
    const newAccButton = document.querySelector("button[name='new-acc']");
    newAccButton.addEventListener("click", function () {
        // Toggle forms immediately
        toggleForms();
    });
});
