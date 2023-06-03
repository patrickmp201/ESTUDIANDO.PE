document.getElementById("form-recuperar").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita la recarga de la página

    // Realiza aquí el código de envío del formulario

    // Muestra la alerta de SweetAlert
    Swal.fire({
        icon: 'success',
        title: 'Correo enviado exitosamente',
        text: 'Se ha enviado un correo para restablecer la contraseña por favor revisar en su bandeja o SPAM.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    });
});