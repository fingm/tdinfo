{
    var i =0;
}

function caraocruz(this_id) {
    var identificador;
    identificador = this_id;
        if (i%2==0){
            imprimir = 'X';
        } else{
            imprimir = 'O';
        }
        document.getElementById(this_id).innerHTML = imprimir;
    i++;
}


