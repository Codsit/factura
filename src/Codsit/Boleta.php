<?php
namespace Codsit;

class Boleta extends Resource{

    const URL_API = '/api/summaries_annulment/';

    public function all(){
        return $this->request("GET",self::URL_API.'records',$this->codsit->api_key);
    }
    public function get($external_id = NULL){
        return $this->request("POST",self::URL_API.$external_id,$this->codsit->api_key);
    }
    public function delete($doc = NULL){
        return $this->request("POST",self::URL_API,$this->codsit->api_key,$doc);
    }

    public function check($doc = NULL){
        return $this->request("GET",self::URL_API.'check_ticket/'.$doc->id,$this->codsit->api_key,$doc);
    }


}