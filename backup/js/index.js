document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const regForm = document.getElementById("regForm");

    // Initially, hide the regForm
    regForm.style.display = "none";

    // Function to toggle between login and reg forms
    function toggleForms() {
        loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
        regForm.style.display = regForm.style.display === "none" ? "block" : "none";
    }

    // Attach the toggleForms function to the newacc button
    const newAccButton = document.querySelector("button[name='newacc']");
    newAccButton.addEventListener("click", function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Add a little animation class for the flip effect
        loginForm.classList.add("animated-form");
        regForm.classList.add("animated-form");

        // Toggle forms after a short delay to let the animation play
        setTimeout(toggleForms, 5000);
    });
});

