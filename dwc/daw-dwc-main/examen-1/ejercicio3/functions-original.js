const PATTERN = /^[A-Za-z\s]+$/;
let edadPersona;
let nombrePersona;
let emailPersona;

function inicio() {
    edadPersona = document.getElementById("edad");
    nombrePersona = document.getElementById("nombre");
    emailPersona = document.getElementById("email");
    
    document.getElementsByClassName('informacion').style.display = 'none';
    document.getElementById("validar").addEventListener("click", validarFormulario);
}

function validarFormulario(e) {
    let actividadSelect = document.getElementById("actividad");
    actividadSelect.addEventListener('change', mostrarInformacion);

    validar();
    document.getElementsByClassName('informacion').style.display = 'block';
}

function mostrarInformacion(e) {
    let opcion = e.target.value;
    let texto = document.getElementById("info");
    let textoError = document.getElementById("errorAct");

    if (opcion = riesgo && edadPersona < 18) {
        textoError.innerHTML = "No puedes seleccionar esta actividad";
    } else {
        texto.innerHTML = "Gracias " + nombrePersona.value + ". Te enviamos al mail la información solicitada sobre la actividad.";
    }

}

function validar(){
    let formularioError = document.getElementById(formError);
    let error = "";

    if(edadPersona.valueMissing()){
        error = "La edad es un campo obligatorio.";
    }

    if(nombrePersona.valueMissing()){
        error = "El nombre es un campo obligatorio.";
    }

    if(emailPersona.valueMissing()){
        error = "El mail es un campo obligatorio.";
    }
    
    if(PATTERN.test(nombrePersona)){
        error = "El nombre solo debe de contener letras o espacios.";
    }

    if(error != ""){
        formularioError.value = error;
    }
}

