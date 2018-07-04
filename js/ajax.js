let form = document.getElementById('form');
form.addEventListener('submit',(ev) =>{
    http_request = (window.XMLHttpRequest)? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP'); 
    http_request.open('POST','/mail.php', true);
    let formulario = new FormData(form);
    console.log(formulario);
    http_request.overrideMimeType('text/plain');
    http_request.onreadystatechange = function(){
        if (http_request.readyState == 4) {//el servidor respondio
            let bio = document.getElementById('bio');
            if (http_request.status == 200) {//el cliente termino
                bio.innerHTML = http_request.responseText;
            } else {//ocurrio un error en el cliente
                alert('Hubo problemas con la petición.');
            }
        }
    }
    http_request.send(formulario);
    ev.preventDefault();
});