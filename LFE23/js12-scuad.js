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
    [1,7,10,4,2,9,5,0,6,3,8,11],
    [0,1,11,2,3,8,4,6,7,10,9,5],
    [10,1,2,3,5,11,6,7,8,4,9,0],
    [0,10,1,6,11,9,3,5,4,2,7,8],
    [11,0,2,7,5,4,6,10,8,1,9,3],
    [0,6,1,2,10,8,3,11,4,9,7,5],
    [11,4,2,10,3,0,5,1,8,6,9,7],
    [0,8,1,9,10,5,4,3,6,2,7,11],
    [11,1,2,8,3,7,4,0,5,6,9,10],
    [1,3,10,11,2,0,6,9,7,4,8,5],
    [0,7,11,6,3,10,4,1,5,2,9,8]
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

//     // Initialisation des variables
// let formData = {};
// let timer;

// // Fonction de sauvegarde
// function saveData() {
//   // Envoyer les données à votre serveur via une requête AJAX
//   // Exemple avec jQuery :
//   $.ajax({
//     url: '8scuad.php',
//     method: 'POST',
//     data: formData,
//     success: function(response) {
//       // Gérer la réponse du serveur si nécessaire
//       console.log(response);
//     },
//     error: function(xhr, status, error) {
//       // Gérer les erreurs de la requête si nécessaire
//       console.error(error);
//     }
//   });

//   // Réinitialiser les données et le minuteur
//   formData = {};
//   clearTimeout(timer);
// }

// function updateFormData() {
//   clearTimeout(timer);
//   timer = setTimeout(saveData, 180000); // 3 minutes 
// }

// $('form').on('change', 'input, select, textarea', updateFormData);

// timer = setTimeout(saveData, 180000); // 3 minutes 
