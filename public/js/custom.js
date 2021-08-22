var lf_head = document.getElementsByClassName("lf-header-bg");
var rh_head = document.getElementsByClassName("rh-header-bg")[0];
var border_wr = document.getElementsByClassName("border-right-warninig")[0];
var btn_contact = document.getElementById("contact-button");
var links = document.getElementsByClassName("nav-link");
var Fab_container = document.getElementById("fab-container");
var Fab = document.getElementById("go-top");

window.onscroll = function() {
    if (window.scrollY > 100 && window.screen.width > 900) {
        lf_head[0].style.backgroundColor = '#FFFFFF';
        lf_head[1].style.backgroundColor = '#FFFFFF';
        rh_head.style.backgroundColor = '#FFFFFF';
        border_wr.style.borderRight = 'none';
        btn_contact.classList.remove("btn-light");
        btn_contact.classList.remove("text-dark");
        btn_contact.classList.add("bg-dark");
        btn_contact.classList.add("text-white");
        Fab_container.style.display = "block";
        Fab.addEventListener('click', goTopSlowly);
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener("mouseover", change_bg_to_blue);
            links[i].addEventListener("mouseout", change_bg_to_white);
            links[i].style.backgroundColor = "white";
        }
    } else if (window.screenY < 100 && window.screen.width > 900) {
        Fab_container.style.display = "none";
        lf_head[0].style.backgroundColor = '#0892fd';
        lf_head[1].style.backgroundColor = '#0892fd';
        rh_head.style.backgroundColor = '#FFFFFF';
        border_wr.style.borderRight = '7px #e0ac00 solid';
        btn_contact.classList.add("btn-light");
        btn_contact.classList.add("text-dark");
        btn_contact.classList.remove("bg-dark");
        btn_contact.classList.remove("text-white");
        for (var i = 0; i < links.length; i++) {
            links[i].removeEventListener("mouseover", change_bg_to_blue, false);
            links[i].removeEventListener("mouseout", change_bg_to_white, false);
            links[i].style.backgroundColor = "#0892fd";
        }
    }
}

function change_bg_to_blue() {
    this.style.backgroundColor = "#0892fd";
}

function change_bg_to_white() {
    this.style.backgroundColor = "white";
}

function goTopSlowly() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}