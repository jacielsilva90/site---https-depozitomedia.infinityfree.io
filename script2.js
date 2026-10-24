
// Mostrar seções do menu
function mostrarSecao(id) { // onclick em nav
    const secoes = document.querySelectorAll(".secao");
    secoes.forEach(secao => {
        secao.classList.add("oculto");
    });
    document.getElementById(id).classList.remove("oculto");
}
////

function slide0(){ 
	//document.getElementById('id_image').src="";
	//document.getElementById('id_link').href=""
	setTimeout("slide1()", 3000)
}
window.onload=slide0
function slide1(){
	//document.getElementById('id_image').src="";
	//document.getElementById('id_link').href=""
	setTimeout("slide2()", 3000)
}
function slide2(){
	//document.getElementById('id_image').src="";
	//document.getElementById('id_link').href=""
	setTimeout("slide0()", 3000)
}

////rodape ano
let anor=document.querySelector("#anor")
const anor1=new Date()
anor.innerHTML=anor1.getFullYear()
////
