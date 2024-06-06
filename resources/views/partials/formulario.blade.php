<section id="formulario">
    <div class="row container mx-auto px-0">
        <div class="col-12 col-md-6">
            <h2 class="titulo">Envíanos tu consulta</h2>
            <p class="texto">En Juralia, estamos para atenderte, no dudes en contactarnos</p>
            <p class="texto">Es muy sencillo, solo debes rellenar el siguiente formulario y te contactaremos en la brevedad posible.</p>
        </div>
        <div class="col-12 col-md-6">
            <form class="row" id="form-contact" action="send-message" method="post">
                @csrf
                <div class="col-md-6 col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <label for="nombre" class="form-label">Nombre</label>
                  </div>
                <div class="col-md-6 col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="apellido" name="apellidos">
                    <label for="apellido" class="form-label">Apellidos</label>
                </div>
                <div class="col-md-6 col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="telefono" name="telefono">
                    <label for="telefono" class="form-label">Teléfono</label>
                </div>
                <div class="col-md-6 col-12 form-floating mb-3">
                    <input type="email" value="" required class="form-control" id="email" name="email">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <textarea class="form-control" required id="consulta" name="consulta"></textarea>
                    <label for="consulta" class="form-label">Consulta</label>
                </div>
                <div class="col-md-12 col-12 form-floating mb-3" >
                  <div class="d-flex w-100">
                      <input class="form-check-input" name="terminos" value="terminos" type="checkbox" id="terminoscheckbox" >
                      <label class="ms-2  form-check-label" for="defaultCheck1">
                          Acepto los <a rel="noreferrer" href="/privacidad" target="_blank" class="form-label terminos-link">términos y condiciones.</a>
                      </label>
                  </div>
                </div>
                <div class="col-md-12 col-12 form-floating mb-3 hide" id="bloque-errors">
                   <small></small>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" data-sitekey="{{config('recaptcha.api_site_key')}}"
                            data-callback='onSubmitMessage'
                            data-action='submit' class="btn btn-page g-recaptcha" id="btn-enviar">Enviar</button>
                </div>

              </form>
        </div>
    </div>
</section>
<style>
    .rc-anchor-checkbox-label{
        padding: 0 !important
    }
</style>
<script>
    (function() {
        // let form = document.getElementById('form-contact');
        // // let csrfToken = document.getElementsByName('_token')[0].value
        // form.addEventListener('submit',function (e){
        //     e.preventDefault()
        //     var response = grecaptcha.getResponse();
        //     if(!document.getElementById('terminoscheckbox').checked){
        //         document.getElementById('bloque-errors').classList.remove('hide')
        //         document.getElementById('bloque-errors').innerHTML= '<small class="error-field">Debe aceptar los términos y condiciones.</small>'
        //     }else if(response.length == 0){
        //         document.getElementById('bloque-errors').classList.remove('hide')
        //         document.getElementById('bloque-errors').innerHTML= '<small class="error-field">Por favor rellene el reCaptcha.</small>'
        //     }else{
        //         form.submit()
        //     }
        //     // let data = {
        //     //     'nombre':document.getElementById('nombre').value,
        //     //     'apellidos':document.getElementById('apellido').value,
        //     //     'telefono':document.getElementById('telefono').value,
        //     //     'email':document.getElementById('email').value,
        //     //     'mensaje':document.getElementById('consulta').value,
        //     // }
        //     //
        //     // var xmlhttp = new XMLHttpRequest();
        //     // xmlhttp.onreadystatechange = function() {
        //     //     if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
        //     //         if (xmlhttp.status == 200) {
        //     //             document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
        //     //         }
        //     //         else if (xmlhttp.status == 400) {
        //     //             alert('There was an error 400');
        //     //         }
        //     //         else {
        //     //             alert('something else other than 200 was returned');
        //     //         }
        //     //     }
        //     // };
        //     // xmlhttp.open("POST", "/send-message", true);
        //     // xmlhttp.setRequestHeader('x-csrf-token', csrfToken);
        //     // xmlhttp.send(JSON.stringify(data));
        // });
    })();

    function onSubmitMessage(){
        let form = document.getElementById('form-contact');
        var response = grecaptcha.getResponse();
        if(!document.getElementById('terminoscheckbox').checked){
            document.getElementById('bloque-errors').classList.remove('hide')
            document.getElementById('bloque-errors').innerHTML= '<small class="error-field">Debe aceptar los términos y condiciones.</small>'
        }else if(response.length == 0){
            document.getElementById('bloque-errors').classList.remove('hide')
            document.getElementById('bloque-errors').innerHTML= '<small class="error-field">Por favor rellene el reCaptcha.</small>'
        }else{
            form.submit()
        }
    }
</script>
