Number.prototype.toRoman = function () {
    var _r = ["M",1000,"CM", 900,"D", 500, "CD", 400, "C", 100,"XC", 90,"L", 50, "XL", 40,"X", 10, "IX", 9, "V", 5, "IV", 4,"I", 1],n = this, i = 0, output = "";
    while ( n>0 ) {
    if ( n >= _r[i+1] ) {
    output += _r[i];
    n -= _r[i+1];
    } else {
    i += 2;
    }
    }
    return output;
    }
    var giornate = [
    [ 0,7,1,2,3,6,4,5,9,8],
    [ 2,0,5,9,6,4,7,3,8,1],
    [ 0,8,1,5,3,2,7,6,9,4],
    [ 2,7,4,1,5,0,6,9,8,3],
    [ 0,4,1,9,2,6,3,5,7,8],
    [ 4,3,5,7,6,1,8,2,9,0],
    [ 0,1,2,5,3,9,7,4,8,6],
    [ 0,6,1,3,4,2,5,8,9,7],
    [ 2,9,3,0,6,5,7,1,8,4]
    ]
    
    function creaCalendario(){
    var hay = "",
    squadre = document.getElementsByClassName("txtequipe");
    for (var g =0;g<giornate.length;g++){
    hay +="<div id='gio'><p>"+(g+1).toRoman()+" </p><ul>"; // giornata
    for (var i = 0; i < giornate[g].length; i+=2){
    hay+="<li>"+squadre[giornate[g][i]].value+" - "+squadre[giornate[g][i+1]].value+"</li>";
    }
    hay +="</ul></div>";
    }
    document.getElementById("visscalendario").innerHTML = hay;
    }