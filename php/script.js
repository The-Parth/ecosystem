140
function navbar_modification() {
    let scrollp = (window.scrollY / window.innerHeight) * 100;
    let width = window.innerWidth;
    if (scrollp >= 110) {
        if (width > 768) {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "rgba(0,0,0,0)";
        }
        else {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "rgba(254, 221, 209,1)";
        }
        document.getElementsByClassName("navbar")[0].style.background = "rgba(254, 221, 209,1)";
        document.documentElement.style.setProperty('--navbar-link-brightness', '100%');

    }
    else if (scrollp > 65) {
        let ns = scrollp - 65;
        let brig_red = 400;
        let op = ns / 25;
        if (op > 1) {
            op = 1;
        }
        document.getElementsByClassName("navbar")[0].style.background = "rgba(254, 221, 209," + op + ")";
        document.getElementsByClassName("navbar")[0].style.boxShadow = "0px 0px 10px 0px rgba(2,2,0," + op + ")";
        let newbright = (500 - brig_red * op);
        document.documentElement.style.setProperty('--navbar-link-brightness', newbright + "%");
        if (width > 768) {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "rgba(0,0,0,0)";
        }
        else {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "rgba(254, 221, 209," + op + ")";
        }
    }
    else {
        document.getElementsByClassName("navbar")[0].style.background = "rgba(0,0,0,0)";
        document.getElementsByClassName("navbar")[0].style.boxShadow = "none";
        document.documentElement.style.setProperty('--navbar-link-brightness', '500%');
        if (width > 768) {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "rgba(0,0,0,0)";
        }
        else {
            let elem = document.getElementById("navbarSupportedContent");
            elem.style.background = "none";
        }
    }

}


function resizer() {
    let width = window.innerWidth;
    if (width > 768) {
        document.getElementById("navbarSupportedContent").style.background = "rgba(0,0,0,0)";
        document.getElementById("navbarSupportedContent").classList.remove("bg-dark");
    }
    else {
        let elem = document.getElementById("navbarSupportedContent");
        elem.style.background = "rgba(0,0,0,0.5)";
    }
}

document.querySelector('a[href="#about"]').addEventListener('click', function (event) {
    event.preventDefault();
    var promiseSection = document.querySelector('#about');
    var offset = 50; // adjust this value to change the offset amount
    window.scrollTo(0, promiseSection.offsetTop - offset);
});

document.querySelector('a[href="#promise"]').addEventListener('click', function (event) {
    event.preventDefault();
    var promiseSection = document.querySelector('#promise');
    var offset = 80; // adjust this value to change the offset amount
    window.scrollTo(0, promiseSection.offsetTop - offset);
});

document.querySelector('a[href="#contact"]').addEventListener('click', function (event) {
    event.preventDefault();
    var promiseSection = document.querySelector('#contact');
    var offset = 60; // adjust this value to change the offset amount
    window.scrollTo(0, promiseSection.offsetTop - offset);
});


window.addEventListener("resize", resizer);
// change color when scroll 100vh navbar
window.addEventListener("scroll", navbar_modification);

function load_page() {
    resizer();
    navbar_modification();
}

window.addEventListener("load", load_page);

