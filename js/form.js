function _(id){ return document.getElementById(id); }

function submitForm(){
    _('submitBtn').disabled = true;
    _('status').innerHTML = 'One moment please...';
    var formData = new FormData();
    formData.append( 'user-name', _('user-name').value );
    formData.append( 'user-email', _('user-email').value );
    formData.append( 'user-message', _('user-message').value );
    var ajax = new XMLHttpRequest();
    ajax.open( 'POST', 'php/parser.php' );
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText = "success") {
                _('contact-form').innerHTML = '<h2>Thanks ' + _('user-name').value + ', you have successfully submitted your request.</h2>';
            }else{
                _('status').innerHTML= ajax.responseText;
                _('submitBtn').disabled = false;
            }
        }
    }
    ajax.send( formData );
}