var x=0;
var y=0;
var index = obtenirParametre("index");
var level = 1;
var potion = 5;
var vie = 100;

var avatars = ['','chevalier.png','hollow.png','vampire.png','cyriak.png'];

var char = document.createElement('img');
         char.src= "img/"+avatars[index];
         char.id = "char";
         document.getElementById('map').appendChild(char);

function obtenirParametre (sVar) {
    return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(sVar).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}

function affichestat() {

    document.getElementById('level').innerHTML= "level : "+ level;

    for (var i =5;i>5;i--){

        if(vie === 100){

            potion= 5;

        }
        if (vie === 80) {

            potion = 4;
        }
        if (vie === 60) {
            potion = 3;
        }
        if (vie === 40) {
            potion = 2
        }
        if (vie === 20) {

            potion=1;
        }


         var vies = document.createElement('img');
        vies.id= vie;
        vie.src  = "img\\potion_red_notap.png";
        document.getElementById('vie').appendChild('vies');



    }

}

affichestat();


function deplacement(e) {



    switch (e.which) {



        case 38: //haut

            document.getElementById('char').style.top = (y--*10) +"px" ;
            if(y <1){
                y=0;
            }
            break;


        case 40: // bas
            document.getElementById('char').style.top = (y++*10) +"px";
            if(y>439){
                y=540;
            }
            break;

        case 37: //gauche
            document.getElementById('char').style.left = (x--*10) +"px";
            if(x <1){
                x=0;
            }
            break;
        case 39 :   // droite;
            document.getElementById('char').style.left = (x++*10) +"px";
            if(x >1139){
                x=540;
            }
            break;

    }
}

document.body.addEventListener("keydown", deplacement);


