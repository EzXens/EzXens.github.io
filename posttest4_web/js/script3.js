
// toogle

const navbar = document.querySelector
('.navbar','#search');

// ketika hamburger menu di klik
document.querySelector('#menu').
onclick = () => {
    navbar.classList.toggle('active');
};

// menghilangkan nav jika klik hamburger menu diluar side bar
const menu = document.querySelector('#menu');

document.addEventListener('click',function(e) {
    if(!menu.contains(e.target) && !navbar.contains(e.target)){
     navbar.classList.remove('active');
    }
});


function check()
{
    let dark = document.getElementById('darkmode-toggle').checked;
    if(dark == true)
    {
        document.getElementById('body').classList.remove('body');
        document.getElementById('body').classList.add('body_itam');
        document.getElementById('header').classList.remove('header');
        document.getElementById('header').classList.add('header_dark');
        document.getElementById('header').classList.remove('text');
        document.getElementById('header').classList.add('textdark');
        document.getElementById('cv-container').classList.remove('cv-container');
        document.getElementById('cv-container').classList.add('cv-container_dark');
        document.getElementById('footer3').classList.remove('footer3');
        document.getElementById('footer3').classList.add('footer_dark3');

    }

    else
    {
        document.getElementById('body').classList.remove('body_itam');
        document.getElementById('body').classList.add('body');
        document.getElementById('header').classList.remove('header_dark');
        document.getElementById('header').classList.add('header');
        document.getElementById('header').classList.remove('textdark');
        document.getElementById('header').classList.add('text');
        document.getElementById('cv-container').classList.remove('cv-container_dark');
        document.getElementById('cv-container').classList.add('cv-container');
        document.getElementById('footer3').classList.remove('footer_dark3');
        document.getElementById('footer3').classList.add('footer3');
    }
}