<?php
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{0,15}$/i",
        "mastercard" => "/^5$|^5[1-5][0-9]{0,14}$/i",
        "amex"       => "/^3$|^3[47][0-9]{0,13}$/i",
        "discover"   => "/^6$|^6[05]$|^601[1]?$|^65[0-9][0-9]?$|^6(?:011|5[0-9]{2})[0-9]{0,12}$/i",
    );

    if (preg_match($cardtype['visa'],$number) AND strlen($number) === 16)
    {
	$type= "visa";
        return 'Visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number) AND strlen($number) === 16)
    {
	$type= "mastercard";
        return 'MasterCard';
    }
    else if (preg_match($cardtype['amex'],$number) AND strlen($number) == 15)
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else
    {
        return false;
    } 
 }

