// Burger Menu deployed on click
const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', (event) => {
    const navBar = document.querySelector('.nav-bar');
    navBar.classList.toggle('extend');
}
); 


//Dropdown Menu on click 
const li = document.querySelector('#dropdown_li');
console.log(li);
li.addEventListener('click', (event) => {
    const dropdown = document.querySelector('.dropdown');
    dropdown.classList.toggle('drop_active');
} )
