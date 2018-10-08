<?php
namespace Codsit;

use Codsit\Error as Errors;

class Codsit{
    const BASE_URL = 'http://soft-fe.test' ;
    public $api_key;

    const API_VERSION = 'V0.1';
    //const BASE_URL = 'https://codsit.com/facturape/v1';

    public function __construct($options){
        $this->api_key = $options["api_key"];
        if (!$this->api_key) {
            throw new Errors\InvalidApiKey();
        }
        $this->Api = new Api($this);
    }
}