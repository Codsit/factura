<?php
namespace Codsit;

use Codsit\Error as Errors;

class Codsit{
    //onst BASE_URL = 'http://soft-fe.test' ;
    const BASE_URL = 'https://factura.codsit.com' ;
    public $api_key;

    const API_VERSION = 'V0.1';


    public function __construct($options){
        $this->api_key = $options["api_key"];
        if (!$this->api_key) {
            throw new Errors\InvalidApiKey();
        }
        $this->Api = new Api($this);
    }
}