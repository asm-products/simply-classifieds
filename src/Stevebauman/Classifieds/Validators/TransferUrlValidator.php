<?php

namespace Stevebauman\Classifieds\Validators;

class TransferUrlValidator {
    
    private $allowedDomains = array(
        'www.kijiji.ca',
        'www.ebay.ca'
    );
    
    public function validateTransferUrl($attribute, $url, $parameters){
        
        $segments = parse_url($url);

        /*
         * Check if a host exists in the url segments
         */
        if(array_key_exists('host', $segments)){
            /*
             * Check if the host is allowed for transfer
             */
            if(in_array($segments['host'], $this->allowedDomains)){
                return true;
            } else {
                return false;
            }
            
        }
        
    }
    
}