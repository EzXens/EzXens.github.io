// toogle

const navbar = document.querySelector
('.navbar','#search');

// ketika hamburger menu di klik
document.querySelector('#menu').
onclick = () => {
    navbar.classList.toggle('active');
};

// menghilangkan nav
const menu = document.querySelector('#menu');

document.addEventListener('click',function(e) {
    if(!menu.contains(e.target) && !navbar.contains(e.target)){
     navbar.classList.remove('active');
    }
});
