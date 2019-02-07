var x=0;
var y=0;
var index = obtenirParametre("index");

var avatars = ['','chevalier.png','hollow.png','vampire.png','cyriak.png'];

var char = document.createElement('img');
         char.src= "../img/"+avatars[index];
         char.id = "char";
         document.getElementById('map').appendChild(char);

function obtenirParametre (sVar) {
    return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(sVar).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}




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


