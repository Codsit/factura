<?php
namespace Codsit;

class Xml extends Resource{

    const URL_API = '/api/send_xml/';

    public function send($external_id = NULL){
        return $this->request("POST",self::URL_API,$this->codsit->api_key,$external_id);
    }
}