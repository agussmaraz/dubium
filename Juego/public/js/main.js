if(location.href == 'http://localhost:8000/home'){
    const logo = document.querySelector('#dubium');
    logo.addEventListener('click', ()=>{
        location.href="juego"
    })
}else{
    const titulo = document.querySelector("#logo");
    titulo.addEventListener('click', ()=>{
        location.href="home"
    })
}