

function toggleTheme(){
    const stylesheet = document.getElementById('theme-stylesheet');
    const mode_text = document.getElementById('userModeText');

    if (toggleSwitch.checked) {
        mode_text.innerHTML = "Tutor Mode";
        stylesheet.setAttribute('href', 'css/styles_tut.css');
    }
    else {
        mode_text.innerHTML = "Student Mode";
        stylesheet.setAttribute('href', 'css/styles_stud.css');
        }
}

// Select the button by its ID
const toggleSwitch = document.getElementById("userModeSwitch");

// Add an event listener
toggleSwitch.addEventListener('change', toggleTheme);

