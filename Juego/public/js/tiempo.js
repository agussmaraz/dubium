// import { exists } from "fs";

let cuerpo = document.body;
let tiempo = document.querySelector('.cajaTiempo');
// console.log(tiempo);
var cronometro;

function detener(){
    clearInterval(cronometro);    
}   



function carga() {
    let seg = document.querySelector('#segundos');
    // let min = document.querySelector('#minutos');
    // console.log(min);
    contador_s = 5;
    // contador_m = 0;
    cronometro = setInterval(
        function () {
            if (contador_s == 5) {
                contador_s = contador_s - 1;
            }
            if (contador_s == 0) {
                detener()
                window.location.href = 'http://localhost:8000/final'
                // return window.location.href;
            }
            // min.innerHTML = contador_m;
            seg.innerHTML = contador_s;
            contador_s--;
        }
        , 1000);
}