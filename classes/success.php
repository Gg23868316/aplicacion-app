<?php

class Success{

    const SUCCESS_ADMIN_NEWCATEGORY = "f52228665c4f14c8695b194f670b0ef1";
    const SUCCESS_SIGNUP_NEWUSER = "8281e04ed52ccfc13820d0f6acb0985a";

    private $successList = [];


    public function __construct()
    {
        $this->successList = [
            Success::SUCCESS_ADMIN_NEWCATEGORY => 'Nueva categoría creada correctamente',
            Success::SUCCESS_SIGNUP_NEWUSER => 'Usuario registrado correctamente',
        ];
    }

    public function get($hash){
        return $this->successList[$hash];
    }

    public function existsKey($key){
        if(array_key_exists($key, $this->successList)){
            return true;
        } else{
            return false;
        }
    }
}

?>