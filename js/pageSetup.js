document.addEventListener("DOMContentLoaded", () => {
    const headerContainer = document.querySelector("header");
    const navElement = document.querySelector("nav"); // Select single nav
    const headerTitle = headerContainer.getAttribute("title");

    // Fetch the header HTML and inject it
    fetch("components/header.html")
        .then((response) => response.text())
        .then((headerHTML) => {
            headerContainer.innerHTML = headerHTML;
            const pageText = document.getElementById("pageText");
            pageText.innerHTML = headerTitle;

            // After injection, set up the theme toggle functionality
            const toggleSwitch = document.getElementById("userModeSwitch");
            const stylesheet = document.getElementById('theme-stylesheet');
            const modeText = document.getElementById('userModeText');

            toggleSwitch.addEventListener("change", () => {
                if (toggleSwitch.checked) {
                    modeText.innerHTML = "Tutor";
                    stylesheet.setAttribute('href', 'css/styles_tut.css');
                } else {
                    modeText.innerHTML = "Student";
                    stylesheet.setAttribute('href', 'css/styles_stud.css');
                }
            });
        })
        .catch((error) => console.error("Error loading header:", error));

    // Fetch the navbar HTML and inject it
    fetch("components/navbar.html")
        .then((response) => response.text())
        .then((navbarHTML) => {
            navElement.innerHTML = navbarHTML; // Inject directly into the single nav
        })
        .catch((error) => console.error("Error loading navbar:", error));
});