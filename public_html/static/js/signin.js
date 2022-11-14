// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault()
            event.stopPropagation()
            if (form.checkValidity()) {
                signIn();
            }

            form.classList.add('was-validated')
        }, false)
    })
})()





function signIn() {
    let obj = new Object();
    obj.email = document.querySelector("#emailInput").value;
    obj.password = document.querySelector("#passwordInput").value;
    obj.action = 'signin';
    $.post(
        "callback.php",
        obj
    ).done(function (data) {
        console.log(data);
        location.replace("?page=home");
    }
    ).fail(function () {
        alert("Email or password is wrong!");
    }
    );
}