<?php
/**
 * @author Luuk Holleman
 * @date: 4/10/14 7:45 PM
 * @package Diabloheroes\D3api\Connector
 */

namespace Diabloheroes\D3api\Connector;

class Connector{
    protected $curl;

    public function __construct(){
        $this->curl = curl_init();
    }

    public function request($url){
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);

        return curl_exec($this->curl);
    }
} 