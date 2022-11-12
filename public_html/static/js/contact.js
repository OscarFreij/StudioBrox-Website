function sendMessage()
{
    if (document.querySelector("#message").value.length > 0)
    {
        let obj = new Object();
        obj.email = document.querySelector("#email").value;
        obj.phone = document.querySelector("#phone").value;
        obj.msg = document.querySelector("#message").value;
        obj.action = 'contactForm';
        if (validateInput(obj))
        {
            $.post( "callback.php", obj );
            alert("Message has been sent to us!");
            location.reload();
        }
        else
        {
            return;
        }
    }
    else
    {
        alert("Message is empty. Please write a message before sending it.");
    }
    
}


function validateInput(obj)
{
    if (validatePhone(obj.phone, false) && validateEmail(obj.email, true))
    {
        return true;
    }
    return false;
}


function validatePhone($number, $required)
{
    let $success;
    if ($number.length > 0)
    {
        $success = /^[\+]?[0-9]{3}[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/i.test($number);
        if (!$success)
        {
            alert("Phone number has the wrong format!");
        }
    }
    else if ($required)
    {
        alert("Phone number missing!");
        $required = false;
    }
    return $success;
}

function validateEmail($email, $required)
{
    let $success;
    if ($email.length > 0)
    {
        $success = /([a-z|A-Z|0-9]+)?[@]([a-z|A-Z|0-9]+)?[\.].+/i.test($email);
        if (!$success)
        {
            alert("Email address has the wrong format!");
        }
        else if ($required)
        {
            alert("Email address missing!");
            $required = false;
        }
    }
    return $success;
}