<?php

if (isset($_POST['action']))
{
    switch ($_POST['action']) {
        case 'signin':
            http_response_code(501);
            break;
        
        default:
            http_response_code(400);
            break;
    }
}