
//Ocultar o título principal da página
let tituloPrincipal = document.getElementById("titular");
window.onload(tituloPrincipal.style.display = "none");

//Aplicar o filtro P/B na imagem da coruja
let corujaPretoBranco = document.getElementById("lechuza");
window.onload(corujaPretoBranco.style.filter = "grayscale(100%)");

//Selecionar todos os Inputs do formulário
let formularioVermelho = document.querySelectorAll("input");

//varrer todo o array e atribuir BG red
for (let i=0; i < formularioVermelho.length; i++) {
   formularioVermelho[i].style.background = "red";
}

//Verificar quais atributos o elemento possiu
let copyright = document.querySelector("#copyright");
console.log (copyright.attributes)

//Selecionar todas as redes sociais do site e colocar em um array
let socialLinks = document.querySelectorAll("ul.social li a");

//Printar no console os links do Twitter e Facebook
console.log(socialLinks[0].getAttribute("href"));
console.log(socialLinks[1].getAttribute("href"));

//Alterar a URL do atributo href através do JS
socialLinks[2].setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA");

//Verificar se o elemento possiu o atributo necessário
let envioForm = document.querySelector("form");
console.log(envioForm.hasAttribute("action"));

//Removendo atributo URL do form e adicionando atributo ACTION sem perder o link do destino
let formLinkAction = envioForm.getAttribute("url");
envioForm.removeAttribute("url");
envioForm.setAttribute("action",formLinkAction);
console.log(envioForm);

//Alterando cor de todos os elementos h2 para vermelho
let tituloH2 = document.querySelectorAll("h2");

for (let i=0; i < tituloH2.length;i++) {
  tituloH2[i].style.color = "red";
}

//Alterando cor de todos os icones para vermelho
let todosIcones = document.querySelectorAll(".icon");

for (let i=0; i < todosIcones.length;i++) {
  todosIcones[i].style.color = "red";
}

//teste

let btnNovo = document.querySelector("#abracadabra");
let wrap = document.querySelector("div");
console.log(wrap);