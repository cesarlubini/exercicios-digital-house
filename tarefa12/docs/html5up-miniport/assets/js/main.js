tituloPrincipal = document.getElementById("titular");
window.onload(tituloPrincipal.style.display = "none");

corujaPretoBranco = document.getElementById("lechuza");
window.onload(corujaPretoBranco.style.filter = "grayscale(100%)");

formularioVermelho = document.querySelectorAll("input");
console.log(formularioVermelho);
for (let i=0; i<formularioVermelho.lenght; i++) {
  console.log(i);
  formularioVermelho[i].style.background = "red";
}