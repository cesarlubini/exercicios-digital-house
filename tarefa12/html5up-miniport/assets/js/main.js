
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function imgAbracadabra () {
  document.querySelector("#lechuza").style.opacity = "0";
}

function imgAlakazan () {
  document.querySelector("#lechuza").style.opacity = "1";
}

//pega o botão abracadabra da página
let btnAbracadabra = document.querySelector("#abracadabra");

//evento que faz a imagem da coruja desaparecer
btnAbracadabra.addEventListener("click", imgAbracadabra);

//duplica o botão abracadabra e o coloca em uma variável (btnAlakazan)
let btnAlakazan = btnAbracadabra.cloneNode(true);

//troca o id do botao alakazan
btnAlakazan.id = "alakazan";
//troca o texto do botao alakazan
btnAlakazan.innerHTML = "Alakazan";

//evento que faz a imagem da coruja aparecer
btnAlakazan.addEventListener("click", imgAlakazan);


//printa o botão alakazan na tela
document.querySelector(".\\038"+"u").append(btnAlakazan);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//traduzindo todos os textos do menu do topo
document.querySelector("#top").textContent = "Topo";
document.querySelector("#work").textContent = "Trabalho";
document.querySelector("#portfolio").textContent = "Portfólio";
document.querySelector("#contact").textContent = "Contato";

//removendo o ícone do FourSquare do rodapé
let socialBtns = document.querySelector(".social");
socialBtns.removeChild(socialBtns.lastElementChild);