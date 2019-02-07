var avatar =0;



document.getElementById('value1').addEventListener("click", function () {

    avatar = document.getElementById('value1').value;
   window.location.href= "vu/game.php?index="+avatar;

});
document.getElementById('value2').addEventListener("click", function () {

    avatar = document.getElementById('value2').value;
    window.location.href = "vu/game.php?index="+avatar;

});
document.getElementById('value3').addEventListener("click", function () {

    avatar = document.getElementById('value3').value;
    window.location.href = "vu/game.php?index="+avatar;

});
document.getElementById('value4').addEventListener("click", function () {

    avatar = document.getElementById('value4').value;
    window.location.href = "vu/game.php?index="+avatar;

});
