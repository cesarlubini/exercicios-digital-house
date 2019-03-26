let botaoMenu = document.querySelector('a.toggle-nav');
let menuPrincipal = document.querySelector('.main-nav ul');

botaoMenu.onclick = function() {
  menuPrincipal.classList.toggle("visible");
}

