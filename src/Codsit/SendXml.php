<?php
/**
 * Created by PhpStorm.
 * User: nik_1
 * Date: 20/10/2018
 * Time: 12:56
 */
namespace Codsit\Codsit;
use Codsit\Resource;
class sendXml extends Resource{
    const URL_API = '/api/send_xml/';

    public function factura($external_id = NULL){
        return $this->request("POST",self::URL_API,$this->codsit->api_key,$external_id);
    }
}