var index =0;


var avatars = ['','chevalier.png','hollow.png','vampire.png','cyriak.png'];

document.getElementById('value1').addEventListener("click", function () {

    index = document.getElementById('value1').value;
    window.location.href = "game.php?index="+index;

});
document.getElementById('value2').addEventListener("click", function () {

    index = document.getElementById('value2').value;
    window.location.href = "game.php?index="+index;

});
document.getElementById('value3').addEventListener("click", function () {

    index = document.getElementById('value3').value;
    window.location.href = "game.php?index="+index;

});
document.getElementById('value4').addEventListener("click", function () {

    index = document.getElementById('value4').value;
    window.location.href = "game.php?index="+index;

});
