

function toggleTheme(){
    const stylesheet = document.getElementById('theme-stylesheet');
    const currentTheme = stylesheet.getAttribute('href');
    stylesheet.setAttribute('href', currentTheme === 'light.css' ? 'dark.css' : 'light.css');
};

// Select the button by its ID
const button = document.getElementById("userMode");

// Add an event listener
button.addEventListener("click", () => {
    // Define the action here
    // toggleTheme();
    alert("Theme Changed");
});