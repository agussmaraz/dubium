
// Funcion para editar el perfil de los usuarios
let cuerpo = document.body;
let button = document.querySelectorAll('.editarAdmin');

button.forEach(element => element.addEventListener('click', function (evento) {
    cambiar(this.id, evento)
}))
function cambiar(id, evento) {
    Swal.fire({
        title: 'Seguro que quieres cambiar el perfil?',
        // text: "Recuerda que no lo puedes revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
    })
    .then((result) => {
        if (result.value) {
            fetch('http://localhost:8000/admin/perfil/' + id)
        .then(function (resp) {
            return resp.json();
        })
        .then(function (data) {
            perfil(data, evento)
            Swal.fire(
                'Exito',
                'Ha sido cambiado exito',
                'success'
            )
        })
        }
    })
 
}
function perfil(data, evento) {
    var clickeado = evento.target;
    console.log(evento);
    var padre = clickeado.closest('.admin');
    var dato = padre.querySelector('.dato');
    if (data == 0) {
        dato.innerHTML = "Usuario";
    } else {
        dato.innerHTML = "Administrador"
    }

}



// Funcion para eliminar usuarios/administradores con javascript
let buttonDelete = document.querySelectorAll('.eliminarAdmin');
console.log(buttonDelete)
buttonDelete.forEach(element => element.addEventListener('click', function (evento) {
    eliminar(this.id, evento)
}))
function eliminar(id, evento) {
    Swal.fire({
        title: 'Seguro que quieres eliminarlo?',
        text: "Recuerda que no lo puedes revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo'
    })
        .then((result) => {
console.log(result);
            if (result.value) {
                fetch('http://localhost:8000/admin/delete/' + id)
                    .then(function (resp) {
                        return resp.json();
                    })
                    .then(function (data) {
                        eliminarDato(data, evento)
                        Swal.fire(
                            'Eliminado!',
                            'Ha sido eliminado con exito',
                            'success'
                        )
                    })
                
            }
        })
}
function eliminarDato(data, evento){
    var clickeado = evento.target;
    // console.log(clickeado)
    var node = clickeado.parentNode
    parentNode = node.parentNode
    padre = parentNode.parentNode
    // console.log(padre);
    padre.remove()
}

let eliminarPregunta = document.querySelectorAll('.eliminarPreg');
// console.log(buttonDelete)
eliminarPregunta.forEach(element => element.addEventListener('click', function (evento) {
    eliminarP(this.id, evento)
}))
function eliminarP(id, evento) {
    Swal.fire({
        title: 'Seguro que quieres eliminarlo?',
        text: "Recuerda que no lo puedes revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo'
    })
        .then((result) => {

            if (result.value) {
                fetch('http://localhost:8000/delete/' + id)
                    .then(function (resp) {
                        return resp.json();
                    })
                    .then(function (data) {
                        eliminarPreg(data, evento)
                        Swal.fire(
                            'Eliminado!',
                            'Ha sido eliminado con exito',
                            'success'
                        )
                    })
                
            }
        })
}
function eliminarPreg(data, evento){
    var clickeado = evento.target;
    console.log(clickeado)
    var node = clickeado.parentNode
    parentNode = node.parentNode
    padre = parentNode.parentNode
    padre.remove()
}