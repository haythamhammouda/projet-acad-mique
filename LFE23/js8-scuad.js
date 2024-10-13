// function creaCalendario() {
//   var equipes = document.getElementsByName("txtequipe");
//   var equipeNames = [];

//   for (var i = 0; i < equipes.length; i++) {
//     var equipeName = equipes[i].value;
//     equipeNames.push(equipeName);
//   }

//   if (equipeNames.length !== 8) {
//     alert("Veuillez saisir les noms de toutes les équipes.");
//     return;
//   }

//   var calendrier = [];
//   var numJournee = 1;

//   for (var j = 0; j < equipeNames.length - 1; j++) {
//     var journee = [];

//     for (var k = 0; k < equipeNames.length / 2; k++) {
//       var match = {
//         equipeA: equipeNames[k],
//         equipeB: equipeNames[equipeNames.length - 1 - k]
//       };

//       journee.push(match);
//     }

//     calendrier.push({
//       journee: numJournee,
//       matches: journee
//     });

//     equipeNames.splice(1, 0, equipeNames.pop());
//     numJournee++;
//   }
//   var visCalendario = document.querySelector(".vis_calendario");
//   visCalendario.innerHTML = "";
//   for (var m = 0; m < calendrier.length; m++) {
//     var journeeHtml = document.createElement("div");
//     journeeHtml.innerHTML = "<h4>Journée " + calendrier[m].journee + "</h4>";

//     for (var n = 0; n < calendrier[m].matches.length; n++) {
//       var matchHtml = document.createElement("p");
//       matchHtml.textContent =
//         calendrier[m].matches[n].equipeA +
//         " vs " +
//         calendrier[m].matches[n].equipeB;
//       journeeHtml.appendChild(matchHtml);
//     }
//     visCalendario.appendChild(journeeHtml);
//   }
// }


Number.prototype.toRoman = function () {
    var _r = ["M",1000,"CM", 900,"D", 500, "CD", 400, "C", 100,"XC", 90,"L", 50, "XL", 40,"X", 10, "IX", 9, "V", 5, "IV", 4,"I", 1], n = this, i = 0, output = "";
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
    var giornate = [[0,1,2,7,3,6,5,4],[1,5,4,3,6,2,7,0],[2,4,3,1,5,0,6,7],[0,3,1,2,4,6,7,5],[2,0,3,5,4,7,6,1],[0,6,1,4,3,7,5,2],[2,3,4,0,6,5,7,1]]
    function creaCalendario(){
    var hay = "",
    squadre = document.getElementsByClassName("txtequipe");
    for (var g =0;g<giornate.length;g++){
    hay +="<div id='gio'><p>"+(g+1).toRoman()+" </p><ul>"; 
    for (var i = 0; i < giornate[g].length; i+=2){
    hay+="<li>"+squadre[giornate[g][i]].value+" - "+squadre[giornate[g][i+1]].value+"</li>";
    }
    hay +="</ul></div>";
    }
    document.getElementById("visscalendario").innerHTML = hay;
    }