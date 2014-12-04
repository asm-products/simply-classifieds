<?php

namespace Stevebauman\Classifieds\Services;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Artdarek\OAuth\Facade\OAuth;

abstract class AbstractOAuthService {
    
    /**
     * Holds consumer ex. Facebook / Google
     *
     * @var type String
     */
    protected $consumer;
    
    /**
     * Holds consumer request URL for grabbing user information
     *
     * @var type String
     */
    protected $request;
    
    public function login(){
        
        $code = $this->input('code');
        
        // get service
        $consumer = $this->getConsumer();

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from facebook, get the token
            $token = $consumer->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $consumer->request( $this->request ), true );
            
            // return the result
            return $result;
        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $consumer->getAuthorizationUri();
            
            // return to facebook login url
             return Redirect::to( (string)$url );
        }

        
    }
    
    private function getConsumer(){
        return OAuth::consumer($this->consumer);
    }
    
    public function input($input){
        return Input::get($input);
    }
    
    
}