let itens=6
let imagens=["imagens/Logo.png","imagens/folhas.png","imagens/3.png"]
let nome=["Logo","Folhas"]
let preço=["R$68,97","R$45,39"]


function geraitens(){
for(let i= 0;i < itens;i++)
    document.getElementById("geraitens").innerHTML+='<a href="pgitem.html" class="itensindex"><li><h2> '+nome[i]+' </h2><img src="'+imagens[i]+'"width=200px height=200px><p class="Descrição"> '+nome[i]+' </p><p class="Preço"> '+preço[i]+' </p></li></a>'
    geraitens2()
}
