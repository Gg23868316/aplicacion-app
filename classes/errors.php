<?php

class Errors{
    // ERROR_CONTROLLER_METHOD_ACTION
    const ERROR_ADMIN_NEWCATEGORY_EXISTS    = "c74163200ec1e78de1223179774c0318";
    const ERROR_SIGNUP_NEWUSER              = "1fdce6bbf47d6b26a9cd809ea1910222";
    const ERROR_SIGNUP_NEWUSER_EMPTY        = "a5bcd7089d83f45e17e989fbc86003ed";
    const ERROR_SIGNUP_NEWUSER_EXISTS       = "a74accfd26e06d012266810952678cf3";

    private $errorsList = [];


    public function __construct()
    {
        $this->errorsList = [
            Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS => 'El nombre de la categoría ya existe, intenta otra',
            Errors::ERROR_SIGNUP_NEWUSER            => 'Hubo un error al intentar registrarte. Intenta de nuevo',
            Errors::ERROR_SIGNUP_NEWUSER_EMPTY      => 'Los campos no pueden estar vacios',
            Errors::ERROR_SIGNUP_NEWUSER_EXISTS     => 'El nombre de usuario ya existe, selecciona otro',
        ];
    }

    public function get($hash){
        return $this->errorsList[$hash];
    }

    public function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        } else{
            return false;
        }
    }

}

?>