<?php

class Validar
{
    // Validar Nome
    public static function validarCampoString($string)
    {
        if (!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $string)) :
            return true;
        else :
            return false;
        endif;
    }

    //Validar Email
    public static function validarCampoEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            return true;
        else :
            return false;
        endif;
    }
    
    public static function validarCampoNumerico($salario)
    {
        if (!preg_replace('/[^0-9]/is', '', $salario)) :
            return true;
        else :
            return false;
        endif;
    }

    public static function dataBr($data)
    {
        if (isset($data)) :
            return date('d/m/Y', strtotime($data));
        else :
            return false;
        endif;
    }

}
