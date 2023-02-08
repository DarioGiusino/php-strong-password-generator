<?php
function random_psw($length, $args = array())
{

    $length = (int)$_GET['psw-length'];

    $permit = array(); //contiene i gruppi di caratteri permessi

    //se non è stato passato alcun argomento, rendo tutti i gruppi disponibili
    //altrimenti rendo disponibili solo i gruppi abilitati in $args
    if (empty($args)) {
        $permit[] = 'alfa_upper';
        $permit[] = 'alfa_lower';
        $permit[] = 'number';
        $permit[] = 'simbol';
    } else {
        $permit = $args;
    }

    $characters = '';

    if (in_array('alfa_upper', $permit)) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if (in_array('alfa_lower', $permit)) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if (in_array('number', $permit)) {
        $characters .= '1234567890';
    }

    if (in_array('simbol', $permit)) {
        $characters .= '!"£$%&/()=?\'^@#[]*';
    }

    // controllo di sicurezza: se è stato passato un valore errato a $length, prendo 32 come default
    if (!is_numeric($length)) {
        $length = 32;
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= substr($characters, rand(0, strlen($characters) - 1), 1);
    }
    return $password;
}
