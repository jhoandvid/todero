const checkbox = document.querySelector('#aceptarTerminos');
const termsContainer = document.querySelector('.terms');
const descripcionTerminos = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rutrum, dui ut lobortis euismod, ex sem aliquam quam, eget maximus est elit id lacus. Vestibulum luctus ligula sit amet ex tincidunt, id placerat ligula ultricies. Donec ac condimentum erat, ut auctor leo. Proin eu imperdiet ligula.";

checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
        Swal.fire({
            title: 'Términos y Condiciones',
            html: `${termsContainer.innerHTML}<p>${descripcionTerminos}</p>`,
            icon: 'success',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Has aceptado los términos y condiciones', '', 'success');
            }
        });
    } else {
        Swal.fire({
            title: 'Términos y Condiciones',
            text: 'Debes aceptar los términos y condiciones',
            icon: 'warning',
            confirmButtonText: 'Aceptar'
        });
    }
});
