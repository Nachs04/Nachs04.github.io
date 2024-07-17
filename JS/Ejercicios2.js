function verificar(){
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var reclamo = document.getElementById('reclamo').value;
    if(nombre == '' || email == '' || reclamo == ''){
        alert('Por favor, rellene todas las casillas.');
        return false;
    }
    return true;
}

function validar() {
    var cantidad = document.getElementById('cantidad').value;
    if(cantidad == '') {
        alert('Por favor, ingresa una cantidad.');
        return false;
    }
    return true;
}
function validarFormulario() {
    var monto = document.getElementById('monto').value;
    var meses = document.getElementById('meses').value;

    if (monto === '' || meses === '') {
        alert('Por favor completa todos los campos.');
        return false;
    }
    return true;
}

function validarFormulario2() {
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num2').value;
    var num3 = document.getElementById('num3').value;

    if (num1 === '' || num2 === '' || num3 === '') {
        alert('Por favor completa todos los campos.');
        return false;
    }
    return true;
}