const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', handleClick); 

function handleClick(event)  
{
    console.log(event.target);
    const navBar = document.querySelector('.nav-bar');
    if(navBar.classList.contains('extend')){
        navBar.classList.remove('extend');
    } else {
        navBar.classList.add('extend');
    }
}
