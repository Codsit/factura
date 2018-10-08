<?php
namespace Codsit;

class Api extends Resource{
    const URL_API = '/api/documents/';

    public function factura($data = NULL){
        return $this->request("POST",self::URL_API,$this->codsit->api_key,$data);
    }
}