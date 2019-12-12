// let cuerpo = document.body;
// let editar = document.querySelector('.editarFoto');
// editar.addEventListener('click', alerta);
// let id = document.querySelector('.id');
// let numero = id.getAttribute('id');
// console.log(numero);
// function alerta() {

//   Swal.fire({
//     title: 'Subir un nuevo avatar',
//     input: 'file',
//     inputAttributes: {
//       autocapitalize: 'off'
//     },
//     showCancelButton: true,
//     confirmButtonText: 'Guardar',
//     showLoaderOnConfirm: true,
//     preConfirm: (login) => {
//       return fetch('/editarFoto/' + numero, {
//         method: 'POST',
//       })
//         .then(response => {
//           if (!response.ok) {
//             throw new Error(response.statusText)
//           }
//           return response.json()
//         })
//         .catch(error => {
//           Swal.showValidationMessage(
//             `Request failed: ${error}`
//           )
//         })
//     },
//     allowOutsideClick: () => !Swal.isLoading()
//   }).then((result) => {
//     if (result.value) {
//       Swal.fire({
//         title: `${result.value.login}'s avatar`,
//         imageUrl: result.value.avatar_url
//       })
//     }
//   })
// }
// console.log(editar);

// let cuerpo = document.body;
// let cuadro = document.querySelectorAll('.editarAdmin');
// // console.log(dato);


// cuadro.forEach(element => element.addEventListener('click', alerta)
// );
// function alerta(evento) {
//   var clickeado = evento.target;
//   var padre = clickeado.closest('.admin');
//   var dato = padre.querySelector('.dato');
//   if(dato.innerText.trim() == "Administrador"){
//     dato.innerHTML = "Usuario";
//   } else {
//     dato.innerHTML = "Administrador"
//   }
//   console.log(dato.innerText);
//   alert('Estas seguro?');
//   console.log(this);
// }





