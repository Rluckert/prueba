
function validarCampos() {
    let reason = $('input[name="reason"]').val();
    let address = $('input[name="address"]').val();

    //Validación de campos
    if (reason.trim() == "") {
        alertify.alert(`<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><center>Error en los campos</center></h4>
        <p><center>Debe escribir una razón</center></p>
        </div>`).set('basic', true);
        return false;
    }
    if (address.trim() == "") {
        alertify.alert(`<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><center>Error en los campos</center></h4>
        <p><center>Debe escribir una dirección</center></p>
        </div>`).set('basic', true);
        return false;
    }

}

async function getCase(id) {
    const data = await fetch(`http://localhost/Prueba/index.php/Home/getCase/${id}`)
        .then((resp) => resp.json())
        .then(function (data) {
            return data;
        })
    return data;
}

/* Show modal update user */
function showModal(id) {
    getUser(id).then(val => {
        $('#updateForm').attr('action', `http://localhost/Prueba/index.php/Home/Case/${id}`);
        $('input[name="Name"]').val(val[0].Name);
        $('input[name="LastName"]').val(val[0].LastName);
        $('input[name="Identification"]').val(val[0].Identification);
        $('input[name="Email"]').val(val[0].Email);
        $('input[name="Birthdate"]').val(val[0].Birthdate);
        $('#select-gender').val(val[0].Gender);
        $('#updateUser').modal('show');
    })

}
