const mockData = [
    {className: 'Calculus 2', teacherName: "Tim", time: "10:15 AM to 11:15 AM" },
    {className: 'English 103', teacherName: "Orange", time: "10:15 AM to 11:15 AM" },
    {className: 'Linear Algebra 2', teacherName: "Berny", time: "9:15 AM to 10:15 AM" },
    {className: 'French 101', teacherName: "Cucomber", time: "12:15 PM to 1:15 PM" },
    {className: 'French 101', teacherName: "Cucomber", time: "12:15 PM to 1:15 PM" }
];


const container = document.querySelector(".all_card_container");


function createCard(session) {
    const card = document.createElement("div");
    card.className = "card_container";

    const className = document.createElement("h4");
    className.className = "class_name";
    className.textContent = session.className;

    const teacherName = document.createElement("h5");
    teacherName.className = "teacher_name";
    teacherName.textContent = `with ${session.teacherName}`;

    const classTime = document.createElement("div");
    classTime.className = "class_time";
    const timeText = document.createElement("p");
    timeText.textContent = session.time;
    classTime.appendChild(timeText);

    // Append all elements to the card
    card.appendChild(className);
    card.appendChild(teacherName);
    card.appendChild(classTime);

  // Append card to the container
  container.appendChild(card);

}

function loadSessions() {
    mockData.forEach((session) => createCard(session))
}

//call the function
loadSessions();


// This piece of code is for the scrolling effect
const cards = document.querySelector(".all_card_container");

let isDown = false 
let startX; 
let scrollLeft;

// this is for when the user touches the cards 

cards.addEventListener("mousedown", (e) => {
    isDown = true; 
    cards.classList.add("active");
    startX = e.pageX - cards.offsetLeft; // to get the starting posistion 
    scrollLeft = cards.scrollLeft;
});


cards.addEventListener("mouseleave", () => {
    isDown = false;
    cards.classList
});

cards.addEventListener("mouseup", () => {
    isDown = false;
    cards.classList.remove("active");
});

cards.addEventListener("mousemove", (e) => {
    if (!isDown) return; 
    e.preventDefault(); 
    const x = e.pageX - cards.offsetLeft; // Current X position
    const walk = (x - startX) * 1.2; // Distance moved, adjust speed by multiplier
    cards.scrollLeft = scrollLeft - walk; 
});

// Handle touch events for mobile devices
cards.addEventListener("touchstart", (e) => {
    isDown = true;
    startX = e.touches[0].pageX - cards.offsetLeft;
    scrollLeft = cards.scrollLeft;
});
  
cards.addEventListener("touchend", () => {
    isDown = false;
});
  
cards.addEventListener("touchmove", (e) => {
    if (!isDown) return;
    const x = e.touches[0].pageX - cards.offsetLeft;
    const walk = (x - startX) * 1.5;
    cards.scrollLeft = scrollLeft - walk;
});