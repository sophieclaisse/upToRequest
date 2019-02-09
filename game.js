var x=0;
var y=0;
var avatar = obtenirParametre("avatar");
var level = 1;
var vie = 100;
var potion= vie /20;
var expMax =1000;
var exp = 100;
var conversionexp = exp*100/expMax;



var avatars = ['','chevalier.png','hollow.png','vampire.png','cyriak.png'];

var char = document.createElement('img');
         char.src= "../img/"+avatars[avatar];
         char.id = "char";
         document.getElementById('map').appendChild(char);

function obtenirParametre (sVar) {
    return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(sVar).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}

function affichestat() {

    document.getElementById('level').innerHTML= "level : "+ level;


    for( let i =potion; i>0; i-- ){


         var vies = document.createElement('img');
        vies.id= "vies";

        document.getElementById('flex-vie').appendChild(vies);
        vies.src ="../img/potion_red_notap.png";

}

    for (let i =0; i<expMax; i++){

        document.getElementById('exp-win').style.width = conversionexp +'px';


    }



        }

affichestat();


function deplacement(e) {



    switch (e.which) {



        case 38: //haut

            document.getElementById('char').style.top = (y--*10) +"px" ;
            if(y <1) {
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

function attaque(){

    vie -= 20;

};

document.body.addEventListener("keydown", deplacement);
document.getElementById('map').addEventListener("click", attaque);

