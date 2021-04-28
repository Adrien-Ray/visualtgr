const _random = document.getElementById("random");
console.log(_random);


_random.addEventListener('click', articlerandom);

function articlerandom(){
    var aleatoir = Math.random()*6;
    let aleatoir_arr = Math.round(aleatoir);
    console.log(aleatoir_arr);

if(aleatoir_arr === 0){
    var href = '<meta http-equiv="refresh" content="0;url=art1.php" />';
}else if(aleatoir_arr === 1){
    var href = '<meta http-equiv="refresh" content="0;url=art2.php" />';
}else if(aleatoir_arr === 2){
    var href = '<meta http-equiv="refresh" content="0;url=art3.php" />';
}else if(aleatoir_arr === 3){
    var href = '<meta http-equiv="refresh" content="0;url=art4.php" />';
}else if(aleatoir_arr === 4){
    var href = '<meta http-equiv="refresh" content="0;url=art5.php" />';
}else if(aleatoir_arr === 5){
    var href = '<meta http-equiv="refresh" content="0;url=art6.php" />';
}else{
    var href = '<meta http-equiv="refresh" content="0;url=art7.php" />';
}
console.log(href);
/* dire de prendre la var href et l'injecter */
_random.innerHTML = href;

}

