// import { exists } from "fs";

let cuerpo = document.body;
let tiempo = document.querySelector('.cajaTiempo');
// console.log(tiempo);


function carga() {
    let seg = document.querySelector('#segundos');
    // let min = document.querySelector('#minutos');
    // console.log(min);
    contador_s = 5;
    // contador_m = 0;
    window.setInterval(
        function () {
            if (contador_s == 5) {
                contador_s = contador_s - 1;
                
            }
            if (contador_s == 0) {
                break;
            }
            // min.innerHTML = contador_m;
            seg.innerHTML = contador_s;
            contador_s--;
        }
        , 1000);
}