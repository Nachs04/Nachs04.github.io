//Ejercicio 1
document.addEventListener("DOMContentLoaded", function() {
    //registrar un evento en un objeto específico. Puede ser cualquier evento válido en JavaScript, como "clic" o "mousedown"
    // Obtener la imagen y la descripción
    var imagen = document.getElementById("imagen");
    var descripcion = document.getElementById("descripcion");

    // Verificar si img y descripcion existen
    if (imagen && descripcion) {
        // Mostrar la descripción al pasar el mouse sobre la imagen
        // al addEventListener toma primero un evento que es si el mause esta sobre la imagen
        imagen.addEventListener("mouseover", function() {
            descripcion.style.display = "block";
             // se utiliza para cambiar la opcion de visualización de nombre id=descripcion a block
        });

        // Ocultar la descripción cuando el mouse sale de la imagen
        imagen.addEventListener("mouseout", function() {
            descripcion.style.display = "none";
            // al poner el display nome el elemento se vuelve invisible, que en este caso es descripcion
        });
    } else {
        // esto es para imprimir y se muestre en el navegador
        console.log("img o descripcion no se encontraron");
    }
});



//Ejercicio 2

function convertir() {
    var base = document.getElementById('base').value;
    var numero = document.getElementById('numero').value;
    var resultado = document.getElementById('resultado');

    if (!base || !numero) {
        alert('Por favor, llena todas las casillas.');
        return; 
    }

    if (numeroValido(numero, base)) {
        resultado.textContent = 'El valor en base 10 es: ' + parseInt(numero, base);
    } else {
        resultado.textContent = 'El número introducido no pertenece a la base dada.';
    }
}

function numeroValido(numero, base) {
    for (var i = 0; i < numero.length; i++) {
        if (parseInt(numero[i]) >= base) {
            return false;
        }
    }
    return true;
}

//Ejercicio 3

function escribirNumero() {
    var numero = document.getElementById("numeros").value;
    var letra = document.getElementById("letra").value;
    var resultado="";
    var valor3=1;
    //sinumero no es igual a "", verifica que numero y letra no sean cadena vaciass
    if (numero !== "" && letra !== "") {
        //document.write("El número ingresado es: " + numero + "<br>");
        var valor=numero*2;
        var valor1=numero*2;
        while(valor>1){
            resultado += letra+" \n";
            valor--;
            //Se ejecuta un bucle while que continúa mientras 
            //valor sea mayor que 1. Dentro de este bucle, se 
            //concatena la variable letra a la variable resultado y se decrementa valor en 1.
            if(valor==1){
                valor=valor1;
                valor=valor-2;
                valor1=valor;
                resultado += "<br>";
                //Si valor es igual a 1, se ejecuta el código dentro del bloque if. Aquí, se actualiza el valor de 
                    //valor y valor1 para ser iguales a valor1 menos 2. Luego, se concatena una etiqueta 
                    //de salto de línea (<br>) a la variable resultado.
                if(valor3<numero){
                    
                    for(var i=1; i<=valor3;i++){
                        resultado +="&nbsp;&nbsp;&nbsp;";
                    }
                    valor3+=1;
                    //A continuación, se verifica si valor3 es menor que numero. Si es así, se ejecuta 
                    //un bucle for que se ejecuta valor3 veces. En cada iteración del bucle, se concatena 
                    //un espacio en blanco (&nbsp;&nbsp;&nbsp;) a la variable resultado. 
                    //Después de cada iteración, el valor de valor3 se incrementa en 1.
                }

                
            }
        
        }
        document.getElementById("miParrafo").innerHTML = resultado;
    } else {
        alert("Por favor, ingresa un número y una letra antes de imprimir.");
    }
}

//Ejercicio 4
function obtenerSignoZodiacal() {
    var fechaNacimiento = new Date(document.getElementById('fechaNacimiento').value);
    var mes = fechaNacimiento.getMonth() + 1;
    var dia = fechaNacimiento.getDate();
    var signo = '';
    var imagen = '';
    var descripcion = '';

    if (!dia || !mes) {
        alert('Por favor, complete todas las casillas.');
        return;
    }

    if ((mes == 1 && dia >= 20) || (mes == 2 && dia <= 18)) {
        signo = 'Acuario';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/acuario.png';
        descripcion = 'Acuario es un signo fijo y de aire, y sin duda, es el signo con mayor capacidad para la invención de toda la rueda zodiacal. Simpático, original y brillante, Acuario también es un signo muy humanitario, al mismo tiempo que independiente e intelectual. Sus puntos negativos se encuentran en su inestabilidad e imprecisión y en su tendencia a llevar la contraria casi por sistema.';
    } else if ((mes == 2 && dia >= 19) || (mes == 3 && dia <= 20)) {
        signo = 'Piscis';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/piscis.png';
        descripcion = 'Piscis es un signo mutable y de agua, también es el último signo del zodiaco, precisamente por eso, es el más rico y complejo de todos. Sensible ante el sufrimiento de los demás, responde con buena voluntad y ganas de ayudar. No le gusta sentirse preso y ni respeta las convenciones, así, por las buenas, aunque tampoco tiende a luchar contra lo establecido, sencillamente, discurre por otro lado.';
    } else if ((mes == 3 && dia >= 21) || (mes == 4 && dia <= 19)) {
        signo = 'Aries';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/aries.png';
        descripcion = 'Aries forma parte de los signos cardinales y al mismo tiempo es un signo de fuego; también es el primer signo del zodíaco, precisamente por eso, simboliza el inicio, la creación. Se caracteriza por ser una persona rebosante de energía y entusiasmo; avanzada y aventurera, adora la libertad, los retos y las nuevas ideas.';
    } else if ((mes == 4 && dia >= 20) || (mes == 5 && dia <= 20)) {
        signo = 'Tauro';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/tauro.png';
        descripcion = 'Tauro pertenece a los signos fijos y simultáneamente es un signo de tierra. La proyección del Sol en su nacimiento suele influir para que sean personas firmes, decididas y constantes en varios sentidos. También adoran sentir seguridad, por eso la buscan tanto, es como una necesidad constante en sus vidas.';
    } else if ((mes == 5 && dia >= 21) || (mes == 6 && dia <= 20)) {
        signo = 'Géminis';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/geminis.png';
        descripcion = 'Géminis es un signo mutable que forma parte del elemento aire; como signo de los gemelos, su carácter es doble y bastante contradictorio por complejo. Por una parte es capaz de adaptarse con facilidad y rapidez a todo, pero por otra puede resultar hipócrita. Su distintivo común es la comunicación y el ingenio.';
    } else if ((mes == 6 && dia >= 21) || (mes == 7 && dia <= 22)) {
        signo = 'Cáncer';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/cancer.png';
        descripcion = 'Cáncer es un signo cardinal y comprendido dentro de los signos de agua. De los signos zodiacales, su carácter es el menos claro; puede ser desde retraído, insociable y pelma, hasta deslumbrante, atractivo y admirado por los demás. A veces es demasiado soñador, por eso equivoca el mundo real con la utopía que ha construido en su cabeza: el refugio de las fantasías que adora.';
    } else if ((mes == 7 && dia >= 23) || (mes == 8 && dia <= 22)) {
        signo = 'Leo';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/leo.png';
        descripcion = 'El signo de Leo es fijo y de fuego, también el signo más dominante del zodíaco. Creativo y abierto, tiene ambición, valor, fuerza, autonomía y total seguridad en sí mismo: sabe dónde quiere llegar y nada ni nadie podrá evitarlo. En contrapartida, sus puntos negativos pueden ser tantos como las virtudes que tiene: vanidad, egocentrismo, arrogancia, impostura y un genio de mil demonios, entre otros defectos.';
    } else if ((mes == 8 && dia >= 23) || (mes == 9 && dia <= 22)) {
        signo = 'Virgo';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/virgo.png';
        descripcion = 'Virgo es un signo mutable y de tierra; representado por una virgen, es un signo caracterizado por su espíritu crítico, precisión, reserva, paciencia y convencionalismo. También es lógico, metódico y aplicado, le gusta aprender y es capaz de analizar las situaciones más complejas con una claridad pasmosa.';
    } else if ((mes == 9 && dia >= 23) || (mes == 10 && dia <= 22)) {
        signo = 'Libra';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/libra.png';
        descripcion = 'Libra es un signo cardinal y de aire, se encuentra además entre los signos más refinados del zodíaco; tiene elegancia, encanto, diplomacia y buen gusto, ama la belleza, es muy curioso por naturaleza y odia los conflictos. Sus puntos negativos a veces son la frivolidad y un carácter voluble.';
    } else if ((mes == 10 && dia >= 23) || (mes == 11 && dia <= 21)) {
        signo = 'Escorpio';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/escorpio.png';
        descripcion = 'Escorpio es un signo fijo y de agua; su potencia y energía emocional son únicas en todo el zodíaco. Tiene mucha imaginación e intuición, además de una gran capacidad para el análisis, fuerza de voluntad y firmeza, aunque también es muy sensible y emocional consigo mismo y con el entorno.';
    } else if ((mes == 11 && dia >= 22) || (mes == 12 && dia <= 21)) {
        signo = 'Sagitario';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/sagitario.png';
        descripcion = 'Sagitario pertenece a los signos mutables y su elemento es el fuego; es uno de los signos más resplandecientes y positivos del zodíaco. También es versátil, adora las aventuras y buscar nuevos horizontes, ya que tiene una mente abierta a nuevas ideas y experiencias y mantiene una actitud decidida ante la adversidad; además, frecuentemente la suerte le acompaña.';
    } else if ((mes == 12 && dia >= 22) || (mes == 1 && dia <= 19)) {
        signo = 'Capricornio';
        imagen = 'Recursos/Imagenes/EjerciciosImagenes/capricornio.png';
        descripcion = 'Capricornio es un signo cardinal y de tierra, y uno de los signos del zodíaco más constante, sólido y apacible. También se caracteriza por ser prudente y práctico en todos los asuntos que le conciernen. Sus aspectos más negativos tienden hacia el pesimismo, la fijeza y la melancolía.';
    }

    document.getElementById('signoZodiacal').innerText = signo;
    document.getElementById('imagenZodiacal').src = imagen;
    document.getElementById('descripcionZodiacal').innerText = descripcion;
}

//ejercicio 5
function desempaquetarInformacion() {
    var numeroEmpleado = document.getElementById('numeroEmpleado').value;
    var estadoCivilCodigo = Math.floor(numeroEmpleado / 1000);
    var edad = Math.floor((numeroEmpleado % 1000) / 10);
    var sexoCodigo = numeroEmpleado % 10;
    var estadoCivil;

    if (!numeroEmpleado) {
        alert('Por favor, ingrese un número de empleado.');
        return;
    }
    if (numeroEmpleado>4999) {
        alert('Por favor, ingrese un número menor a 5000');
        return;
    }
    if (numeroEmpleado<1000) {
        alert('Por favor, ingrese un número mayor a 999');
        return;
    }

    switch (estadoCivilCodigo) {
        case 1:
            estadoCivil = 'Soltero';
            break;
        case 2:
            estadoCivil = 'Casado';
            break;
        case 3:
            estadoCivil = 'Viudo';
            break;
        case 4:
            estadoCivil = 'Divorciado';
            break;
    }

    var sexo = (sexoCodigo % 2 === 0) ? 'Femenino' : 'Masculino';

    document.getElementById('result').innerHTML = 'Estado Civil: ' + estadoCivil + '<br>Edad: ' + edad + '<br>Sexo: ' + sexo;
}
