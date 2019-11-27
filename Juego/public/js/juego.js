const css = document.styleSheets[0]
const respuestas = document.querySelectorAll("form")

respuestas.forEach(respuesta => {
    respuesta.classList.toggle("fade")
})