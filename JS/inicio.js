document.addEventListener('DOMContentLoaded', function() {
    var opciones = document.querySelector('#opciones');
    var botonMenu = document.querySelector('.botonMenu');

    function toggleMenu() {
        opciones.classList.toggle('hidden');
    }

    if (botonMenu) {
        botonMenu.addEventListener('click', toggleMenu);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var indice = document.querySelector('#Indice');

    function toggleIndice() {
        if (window.scrollY > 0) {
            indice.classList.add('show');
        } else {
            indice.classList.remove('show');
        }
    }

    window.addEventListener('scroll', toggleIndice);
});



function salida() {
	let respuesta=confirm("¿Desea visitar la web de ultimas noticias?");
	if(respuesta){
		alert('Bienvenido');
		window.location= "https://news.google.com/search?q=Big%20data&hl=es-419&gl=PE&ceid=PE%3Aes-419";
	}else
	{
	alert("Ok");
	event.preventDefault(); // Evita que se abra el enlace por defecto

	}
}