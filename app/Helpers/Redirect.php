<?php

class Redirect {

    public static function redirecionar($url){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url);
    }

}