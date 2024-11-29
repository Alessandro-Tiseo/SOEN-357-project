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
            navElement.innerHTML = navbarHTML;
            // Set the active class on the current page's link
            // Remove active class from previous item
            if (navElement.querySelector(".active")) {
                navElement.querySelector(".active").classList.remove("active");
            }
            switch (headerTitle) {
                case "Tutoring Application":
                    navElement.querySelector(".home").classList.add("active");
                    break;
                case "Calendar":
                    navElement.querySelector(".calendar").classList.add("active");
                    break;
                case "Search for Tutors":
                    navElement.querySelector(".search").classList.add("active");
                    break;
                case "Profile":
                    navElement.querySelector(".profile").classList.add("active");
                    break;
                case "Messages":
                    navElement.querySelector(".messages").classList.add("active");
                    break;
                default:
                    break;
            }
            // Modify specific elements inside the navbar
            const specificLink = navElement.querySelector(".some-class"); // Replace '.some-class' with your target selector
            if (specificLink) {
                // Change background color
                // Or change the class
                specificLink.classList.add("new-class-name");
            }
        })
        .catch((error) => console.error("Error loading navbar:", error));
});