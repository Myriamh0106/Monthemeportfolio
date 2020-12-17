// cible les éléments à modifier
var toggle = document.querySelector(".nav-toggle");
var nav    = document.querySelector(".nav_menu");
var page   = document.documentElement;
var links  = document.querySelectorAll(".menu1 li");


// fonction permettant de basculer l'affichage en ajoutant/supprimant des classes
function doToggle() {
  toggle.classList.toggle('active');
  nav.classList.toggle('open');
  page.classList.toggle('noscroll');
}

// fonction doToggle() est appelé lorsqu'on clique sur l'icone de menu
toggle.addEventListener('click', doToggle);

if (window.matchMedia("(max-width: 600px)").matches) {
  links.forEach(function(link){
    link.addEventListener('click', doToggle);
  });
}