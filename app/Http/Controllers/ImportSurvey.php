<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include 'redcap.php';

class ImportSurvey
{
    private $fields;
    private $ch;

    public function __construct(){
        $this->fields = array(
            'token'   => $GLOBALS['api_token'],
            'content' => 'metadata',
            'format'  => 'json',
            'forms'  => array('survey')
        );

        $this->ch = curl_init();
    }

    public function import(){
        curl_setopt($this->ch, CURLOPT_URL, $GLOBALS['api_url']);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($this->fields, '', '&'));
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, FALSE); // Set to TRUE for production use
        curl_setopt($this->ch, CURLOPT_VERBOSE, 0);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($this->ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($this->ch, CURLOPT_FRESH_CONNECT, 1);

        $output = curl_exec($this->ch);
        $charOutput = utf8_decode($output);
        curl_close($this->ch);
        return $charOutput;
    }
}
