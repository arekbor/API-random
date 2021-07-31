<?php

set_error_handler('error_handler', E_ALL);

function error_handler($errNo, $errStr, $errFile, $errLine)
{
    //czysci dane wyjsciowe
    if(ob_get_length()) ob_clean();

    $error_message = 'ERRNO: '.$errNo.chr(10).'TEXT: '.$errStr.chr(10).'LOCAL: '.$errFile.'LINE '.$errLine;
    echo $error_message;
    exit();
}
