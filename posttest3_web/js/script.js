// alert
// alert pup up box
// var nama = prompt("Boleh Tau Siapa Nama Anda ?")
// alert("Selamat datang di website kami , sobat " + nama )  
// console.log("Selamat Datang di website kami"); 

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
        document.getElementById('banner').classList.remove('banner');
        document.getElementById('banner').classList.add('banner_dark');
        document.getElementById('more').classList.remove('more');
        document.getElementById('more').classList.add('more_dark');
        document.getElementById('footer').classList.remove('footer');
        document.getElementById('footer').classList.add('footer_dark');

    }

    else
    {
        document.getElementById('header').classList.remove('header_dark');
        document.getElementById('header').classList.add('header');
        document.getElementById('header').classList.remove('textdark');
        document.getElementById('header').classList.add('text');
        document.getElementById('banner').classList.remove('banner_dark');
        document.getElementById('banner').classList.add('banner');
        document.getElementById('more').classList.remove('more_dark');
        document.getElementById('more').classList.add('more');
        document.getElementById('footer').classList.remove('footer_dark');
        document.getElementById('footer').classList.add('footer');

    }
}


let button = document.getElementById('more');
button.addEventListener("click", function(){
let x = document.getElementById("kotak-gambar");
if(x.style.display == "none")
{
    x.style.display = "block";
}

else
{
    x.style.display = "none";
}
})

