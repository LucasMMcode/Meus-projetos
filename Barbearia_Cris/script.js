let imagens=1;//["Logo.png","folhas.png","3.png","b","c","d"];
let nome=1;//["Logo","Folhas","a","b","c","d"];
let preço=1;//["R$68,97","R$45,39","a","b","c","d"];

function geraitens(){
for(let i= 0;i < 9 /* nome.length11*/ ;i++)
    document.getElementById("geraitens").innerHTML+='<li><h2> '
+nome/*[i]*/+' </h2><img src="img/'
+imagens/*[i]*/+'"width=200px height=200px><p class="Descrição"> '
+nome/*[i]*/+' </p><p class="Preço"> '
+preço/*[i]*/+' </p></li>'
}