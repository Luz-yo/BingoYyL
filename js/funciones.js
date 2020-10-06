function ganador(tipoJuego){

console.log("Ganador: " + tipoJuego);
    switch (tipoJuego) {

  case 1:
 if (c1.length == 0){
     terminarJuego();
    console.log('Ya completaste la columna B');
}else{
    alert('Aun no ganas -> completa la columna B');
}
  break;

  case 2:
 if (c2.length == 0){
     terminarJuego();
    console.log('Ya completaste la columna I');
}else{
    alert('Aun no ganas -> completa la columna I');
}
  break;

  case 3:
 if (c3.length == 0){
     terminarJuego();
    console.log('Ya completaste la columna N');
}else{
    alert('Aun no ganas -> completaste la columna N');
}
  break;

  case 4:
  if (c4.length == 0){
     terminarJuego();
    console.log('Ya completaste la columna G');
}else{
     alert('Aun no ganas -> completaste la columna G');
} 
  break;

  case 5:
  if (c5.length == 0){
     terminarJuego();
    console.log('Ya completaste la columna O');
}else{
    alert('Aun no ganas -> completa la columna O');
}  break;

  case 6:
 if (c1.length == 0 && c2.length == 0 && c3.length == 0 && c4.length == 0 && c5.length == 0){
    terminarJuego();
    console.log('Tabla llena');
}else{
     alert('Aun no ganas');
}
  
  break;

  default:

  console.log('No eres tu, somos nosotros');
  break;
}

}




function crearTabla() {
    var bingo = ["", "B", "I", "N", "G", "O"];
    //arreglos que reciben el valor que puede tomar cada columna
    var columnaB = [];
    var columnaI = [];
    var columnaN = [];
    var columnaG = [];
    var columnaO = [];
    //variables que reciben un numero aleatorio para elegir el indice del arreglo de la respectiva columna
    var indiceB = 0;
    var indiceI = 0;
    var indiceN = 0;
    var indiceG = 0;
    var indiceO = 0;
    //arreglos que recibe el valor que se vera reflejado en la tabla de juego
     c1 = [];
     c2 = [];
     c3 = [];
     c4 = [];
     c5 = [];

    for (var i = 0; i < 15; i++) {
        columnaB[i] = 1 + i;
        columnaI[i] = 16 + i;
        columnaN[i] = 31 + i;
        columnaG[i] = 46 + i;
        columnaO[i] = 61 + i;
    }

    balotasenjuego = [];

    for (var i = 0; i < 5; i++) {

        //asignacion de numeros columna B
        indiceB = Math.round((Math.random() * (columnaB.length - 1)));
        c1[i] = columnaB[indiceB];
        columnaB.splice(indiceB, 1);

        //asignacion de numeros columna I
        indiceI = Math.round((Math.random() * (columnaI.length - 1)));
        c2[i] = columnaI[indiceI];
        columnaI.splice(indiceI, 1);

        //asignacion de numeros columna N
        indiceN = Math.round((Math.random() * (columnaN.length - 1)));
        c3[i] = columnaN[indiceN];
        columnaN.splice(indiceN, 1);

        //asignacion de numeros columna G
        indiceG = Math.round((Math.random() * (columnaG.length - 1)));
        c4[i] = columnaG[indiceG];
        columnaG.splice(indiceG, 1);

        //asignacion de numeros columna O
        indiceO = Math.round((Math.random() * (columnaO.length - 1)));
        c5[i] = columnaO[indiceO];
        columnaO.splice(indiceO, 1);

        balotasenjuego.push(c1[i]);
        balotasenjuego.push(c2[i]);
        balotasenjuego.push(c3[i]);
        balotasenjuego.push(c4[i]);
        balotasenjuego.push(c5[i]);

    }

    //tabla de juego
    document.write("<TR><TD class='BINGO1'>" + bingo[1] + "</td><TD class='BINGO2'>" + bingo[2] + "</td><TD class='BINGO3'>" + bingo[3] + "</td><TD class='BINGO4'>" + bingo[4] + "</td><TD class='BINGO5'>" + bingo[5] + "</td></tr>");
    document.write("<TR><TD class='BT' id='BS" + c1[0] + "'>" + c1[0] + "</td><TD class='BT' id='BS" + c2[0] + "'>" + c2[0] + "</td><TD class='BT' id='BS" + c3[0] + "'>" + c3[0] + "</td><TD class='BT' id='BS" + c4[0] + "'>" + c4[0] + "</td><TD class='BT' id='BS" + c5[0] + "'>" + c5[0] + "</td></tr>");
    document.write("<TR><TD class='BT' id='BS" + c1[1] + "'>" + c1[1] + "</td><TD class='BT' id='BS" + c2[1] + "'>" + c2[1] + "</td><TD class='BT' id='BS" + c3[1] + "'>" + c3[1] + "</td><TD class='BT' id='BS" + c4[1] + "'>" + c4[1] + "</td><TD class='BT' id='BS" + c5[1] + "'>" + c5[1] + "</td></tr>");
    document.write("<TR><TD class='BT' id='BS" + c1[2] + "'>" + c1[2] + "</td><TD class='BT' id='BS" + c2[2] + "'>" + c2[2] + "</td><TD class='BT' id='BS" + c3[2] + "'>" + c3[2] + "</td><TD class='BT' id='BS" + c4[2] + "'>" + c4[2] + "</td><TD class='BT' id='BS" + c5[2] + "'>" + c5[2] + "</td></tr>");
    document.write("<TR><TD class='BT' id='BS" + c1[3] + "'>" + c1[3] + "</td><TD class='BT' id='BS" + c2[3] + "'>" + c2[3] + "</td><TD class='BT' id='BS" + c3[3] + "'>" + c3[3] + "</td><TD class='BT' id='BS" + c4[3] + "'>" + c4[3] + "</td><TD class='BT' id='BS" + c5[3] + "'>" + c5[3] + "</td></tr>");
    document.write("<TR><TD class='BT' id='BS" + c1[4] + "'>" + c1[4] + "</td><TD class='BT' id='BS" + c2[4] + "'>" + c2[4] + "</td><TD class='BT' id='BS" + c3[4] + "'>" + c3[4] + "</td><TD class='BT' id='BS" + c4[4] + "'>" + c4[4] + "</td><TD class='BT' id='BS" + c5[4] + "'>" + c5[4] + "</td></tr>");

}
function tengoBalota(num)
{
    tengo = false;
   balotasenjuego.forEach(function(elemento, indice, array){
           if(num == elemento){
            tengo = true;
           }
   })
   return tengo;
}

 function pintarBalotas(num) {
                if (num > 0 && num <= 15) {
                    $("#" + num).css("background-color", "#ffffa4");
                    $("#numBingo").html("<p><br>B<br>" + num + "<p>");

                    if(tengoBalota(num))
                    {
                     $("#BS" + num).css("background-color", "#ffffa4");
                     var pos = c1.indexOf(num);
                     c1.splice(pos,1);
                    }
                    
                    

                } else if (num > 15 && num <= 30) {
                    $("#" + num).css("background-color", "#c0d0f1");
                    $("#numBingo").html("<p><br>I<br> " + num + "<p>");

                    if(tengoBalota(num))
                    {
                     $("#BS" + num).css("background-color", "#c0d0f1");
                     var pos = c2.indexOf(num);
                     c2.splice(pos,1);
                    }

                } else if (num > 30 && num <= 45) {
                    $("#" + num).css("background-color", "#ffbbbb");
                    $("#numBingo").html("<p><br>N<br> " + num + "<p>");

                    if(tengoBalota(num))
                    {
                     $("#BS" + num).css("background-color", "#ffbbbb");
                     var pos = c3.indexOf(num);
                     c3.splice(pos,1);
                    }

                } else if (num > 45 && num <= 60) {
                    $("#" + num).css("background-color", "#bfeac8");
                    $("#numBingo").html("<p><br>G<br> " + num + "<p>");

                    if(tengoBalota(num))
                    {
                     $("#BS" + num).css("background-color", "#bfeac8");
                     var pos = c4.indexOf(num);
                     c4.splice(pos,1);
                    }

                } else if (num > 60 && num <= 75) {
                    $("#" + num).css("background-color", "#dcd2ea");
                    $("#numBingo").html("<p><br>O<br> " + num + "<p>");

                    if(tengoBalota(num))
                    {
                     $("#BS" + num).css("background-color", "#dcd2ea");
                     var pos = c5.indexOf(num);
                     c5.splice(pos,1);
                    }

                }
    }



function pintarTablaCompleta() {
        $.ajax({
            type: "POST",
            url: "control_juego.php?pintar=1",
            data: "",
            success: function(datos) {
                console.log(datos);
                num = datos.split(",");
                i = 1;
                while( i < num.length ){
                      console.log(num[i]);
                   pintarBalotas(num[i]);
                   i++;
                }
            },
            error: function() {
                console.log("No se puede Mostrar Tabla");
            }
        });
    }


function cantarBingo() {
        $.ajax({
            type: "POST",
            url: "control_juego.php?pintar=3",
            data: "",
            success: function(datos) {
                console.log(datos);
                ganador(parseInt(datos));
            },
            error: function() {
                console.log("No se puede Mostrar Tabla");
            }
        });
    }


function terminarJuego(){
    $.ajax({
            type: "POST",
            url: "control_juego.php?pintar=4",
            data: "",
            success: function(datos) {
                $('#divGanador').html("<label> Ganador: "+ datos + "</label>");
            },
            error: function() {
                console.log("No se puede Mostrar Tabla");
            }
        }); 
}