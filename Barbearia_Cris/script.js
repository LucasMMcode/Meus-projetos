let imagens=["imagens/Logo.png","imagens/folhas.png","imagens/3.png","b","c","d"];
let nome=["Logo","Folhas","a","b","c","d"];
let preço=["R$68,97","R$45,39","a","b","c","d"];

function bemvindo(){
    alert("Seja Bem-vindo");
}
function geraitens(){
for(let i= 0;i < nome.length ;i++)
    document.getElementById("geraitens").innerHTML+='<a href="pgitem.html" class="itensindex"><li><h2> '+nome[i]+' </h2><img src="'+imagens[i]+'"width=200px height=200px><p class="Descrição"> '+nome[i]+' </p><p class="Preço"> '+preço[i]+' </p></li></a>'
}
