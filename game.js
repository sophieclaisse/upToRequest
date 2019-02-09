function ajaxCall(params)
{
    if(params)
    {

        var url = params.url;
        var parameters = '?';
        for(var i in params.parameters)
        {
            parameters+=Object.keys(params.parameters[i])[0]+"="+params.parameters[i][Object.keys(params.parameters[i])[0]];
        }

        url+=parameters;

        var xhttp = new XMLHttpRequest();

        // Affichage de l'information de chargement

        document.getElementById('ajaxContent').innerHTML = "<div>Chargement en cour ...</div>";

        xhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById('ajaxContent').innerHTML = "";
                var json = JSON.parse(this.responseText);

                switch(params.parameters[0].action)
                {
                    case"affProducts":

                        for(var i in json)
                        {var x=json[i].position_x;
                            var y=json[i].position_y;
                            var avatar = json[i].id_avatar;



                            var avatars = ['','chevalier.png','hollow.png','vampire.png','cyriak.png'];

                            var char = document.createElement('img');
                            char.src= "../img/"+avatars[avatar];
                            char.id = "char";
                            document.getElementById('map').appendChild(char);
                            var nom = json[i].nom;





                        }
                        var level = json[1].level;
                        var vie = json[1].vie;
                        var potion= vie /20;
                        var expMax =json[1].experience;
                        var exp = 0;
                        var conversionexp = exp*100/expMax;


                    function affichestat() {

                        document.getElementById('level').innerHTML= "level : "+ level;
                        document.getElementById('nom').innerHTML= nom ;


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



                        break;
                    default:
                        alert("Parametre non géré");
                        break;

                }


            }
        };

        xhttp.open("GET",url,true);

        xhttp.send();



        console.log("Sent an http request :"+url);


    }
}

document.getElementById('map').addEventListener('click', function()
{
    ajaxCall(
        {'url' : '../model/affichage.php',
            'parameters' : [
                {'action':'affProducts'}

            ]
        }
    );

});




