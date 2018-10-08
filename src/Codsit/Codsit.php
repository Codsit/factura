<?php
namespace Codsit;

use Codsit\Error as Errors;

class Codsit{
    public $api_key;

    const API_VERSION = 'V0.1';
    //const URL_BASE = 'https://codsit.com/facturape/v1';
    const URL_BASE = 'http://soft-fe.test';

    public function __construct($options){
        $this->api_key = $options["api_key"];
        if (!$this->api_key) {
            throw new Errors\InvalidApiKey();
        }
        $this->Api = new Api($this);
    }
}