<?php
/**
*   copyright: this belongs to someone dumb

    this payment don't anything exccept
    show us what vars we have here
    show us basic structure we need here
*/

namespace Addons\DumbPayment\Helper;

use Tygh\Registry;

// isn't required but useful
function LOGGER ($msg, $f=__FILE__, $l=__LINE__)
{
    // Johny Logger, keep logging
    $logger = Tygh\Logger::instance();
    $logger->logfile = 'var/cache/dumb_payment' . date('Y-m-d') . '.log';
    $logger->write($msg, $f, $l);
}


function URLShorter($url, $params)
{
    $shor_url = '';
    try {
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL,"https://www.googleapis.com/urlshortener/v1/url");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"longUrl": "' . $url . '"}');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, 'Content-Type: application/json');
       
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        
        // ugly way to parse json :D
        $lines = explode(',', $server_output);
        
        foreach($lines as $line)
        {
            $kv = explode('"');
            if(len($kv) > 3 && $kv[1] == 'id')
            {
                $shor_url = $kv[3];
            }
        }        
    } catch(Exception $e){
        LOGGER("Here I'm rocking like a... Holly shit!!", __FILE__, __LINE__);
        LOGGER($e->getMessage(), __FILE__, __LINE__);
    }

    return $shor_url;
}