addEventListener();

function addEventListener(){
    var btnCancelar = document.getElementById('btnCancelar');

    btnCancelar.addEventListener('click', function(){
        swal({
            title: "¿Estas seguro?",
            text: "Seras redireccionado a la página de inicio de sesion!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                window.location.href = "login.php";
            }
          });
    });
}