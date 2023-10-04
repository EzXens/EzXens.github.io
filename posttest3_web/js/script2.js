
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
        document.getElementById('header').classList.remove('header');
        document.getElementById('header').classList.add('header_dark');
        document.getElementById('header').classList.remove('text');
        document.getElementById('header').classList.add('textdark');
        document.getElementById('container-card').classList.remove('container-card');
        document.getElementById('container-card').classList.add('container-card_dark');
        document.getElementById('footer').classList.remove('footer');
        document.getElementById('footer').classList.add('footer_dark');

    }

    else
    {
        document.getElementById('header').classList.remove('header_dark');
        document.getElementById('header').classList.add('header');
        document.getElementById('header').classList.remove('textdark');
        document.getElementById('header').classList.add('text');
        document.getElementById('container-card').classList.remove('container-card_dark');
        document.getElementById('container-card').classList.add('container-card');
        document.getElementById('footer').classList.remove('footer_dark');
        document.getElementById('footer').classList.add('footer');
    }
}
