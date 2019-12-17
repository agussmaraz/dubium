




let cuerpo = document.body;
let button = document.querySelectorAll('.editarAdmin');
// let cuadro = document.querySelectorAll('.dato');
// console.log(button);
button.forEach(element => element.addEventListener('click', function (evento) {
    cambiar(this.id, evento)
}))

function cambiar(id, evento) {
    fetch('http://localhost:8000/admin/perfil/' + id)
        .then(function (resp) {
            return resp.json();
        })
        .then(function (data) {
            perfil(data, evento)
            // console.log(clickeado)
        })

        function perfil(data, evento) {
            var clickeado = evento.target;
            console.log(evento);
            var padre = clickeado.closest('.admin');
            var dato = padre.querySelector('.dato');
            if (data == 0) {
                dato.innerHTML = "Usuario";
                // console.log(padre)
            } else {
                dato.innerHTML = "Administrador"
            }

        }



            // let dato = document.querySelectorAll('.dato')   
            //     if (data == 0) {
            //         document.querySelector('.dato').innerHTML = 'Usuario'
            //     }
            //     else {
            //         document.querySelector('.dato').innerHTML = 'Administrador'
            //     }


    // console.log(data);

}

// let cuadro = document.querySelectorAll('.admin');
// cuadro.forEach(element.addEventListener('click', ) => { 
// });

// cuadro.forEach(element => element.addEventListener('click', alerta())
// );
// function alerta(evento) {
//     var clickeado = evento.target;
//     var padre = clickeado.closest('.admin');
//     console.log(clickeado)
//     var dato = padre.querySelector('.dato');
//     if (dato.innerText.trim() == "Administrador") {
//         dato.innerHTML = "Usuario";
//     } else {
//         dato.innerHTML = "Administrador"
//     }
//     console.log(dato.innerText);
//     alert('Estas seguro?');
//     console.log(this);
// }





