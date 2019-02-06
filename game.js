
var x=0;
var y=0;
var avatar = ['chevalier.png','hollow.png','vampire.png','cyriak.png'];



var char = document.createElement('div');
    
    char.innerHTML="<img id='char' alt='avatar' src='img/"+avatar[1]+"'>";
    document.getElementById('map').appendChild(char);



function deplacement(e) {



    switch (e.which) {



        case 38: //haut

            document.getElementById('char').style.top = y-- +"px" ;
            if(y <1){
                y=0;
            }
            break;


        case 40: // bas
            document.getElementById('char').style.top = y++ +"px";
            if(y>539){
                y=540;
            }
            break;

        case 37: //gauche
            document.getElementById('char').style.left = x-- +"px";
            if(x <1){
                x=0;
            }
            break;
        case 39 :   // droite;
            document.getElementById('char').style.left = x++ +"px";
            if(x >539){
                x=540;
            }
            break;

    }
}

function attack(){

}

document.body.addEventListener("keydown", deplacement);






