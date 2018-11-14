<?php
/**
 * Created by PhpStorm.
 * User: jhordyhuaman
 * Date: 14/11/2018
 * Time: 03:32
 */

namespace Codsit;


class Services extends Resource
{
    const URL_API = '/api/services/';

    public function Dni($numero_dni){
        return $this->request("GET",self::URL_API."dni/".$numero_dni,$this->api_key);
    }
    public function Ruc($numero_ruc){
        return $this->request("GET",self::URL_API."dni/".$numero_ruc,$this->api_key);
    }

}