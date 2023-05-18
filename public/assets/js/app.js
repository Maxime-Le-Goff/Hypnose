// Burger Menu deployed on click
const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', (event) => {
    const navBar = document.querySelector('.nav-bar');
    navBar.classList.toggle('extend');
}
); 


//Dropdown Menu on click 
const li = document.querySelector('#dropdown_li');
li.addEventListener('click', (event) => {
    const dropdown = document.querySelector('.dropdown');
    dropdown.classList.toggle('drop_active');
} )


// //Active class on navbar
// const navItems = document.querySelectorAll('.main_nav');
// for(item of navItems){
//     item.addEventListener('click',(e) => {
//         e.target.classList.add('active');
//     })
// }