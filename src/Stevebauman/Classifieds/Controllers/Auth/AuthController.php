<?php

namespace Stevebauman\Classifieds\Controllers;

use Stevebauman\Classifieds\Services\SentryService;
use Stevebauman\Classifieds\Services\FacebookAuthService;
use Stevebauman\Classifieds\Controllers\BaseController;

class AuthController extends BaseController {
    
    public function __construct(FacebookAuthService $facebook, SentryService $sentry){
        $this->facebook = $facebook;
        $this->sentry = $sentry;
    }
    
    public function getIndex()
    {
        return view('classifieds::auth.index', array(
            'title' => 'Login'
        ));
    }
    
    public function getLogout()
    {
        $this->sentry->logout();
        
        $this->message = 'Successfully logged out! Come back anytime :)';
        $this->messageType = 'success';
        $this->redirect = route('classifieds.home.index');
        
        return $this->response();
    }
    
    public function getFacebookLogin()
    {
        $result = $this->facebook->login();
        
        if(is_object($result)){
            
            return $result;
            
        } else {
            
            $result['password'] = uniqid();
            
            if($user = $this->sentry->createUser($result)){
                
                $this->sentry->login($user);
                    
                $this->message = 'Successfully logged in with Facebook! Thanks :)';
                $this->messageType = 'success';
                $this->redirect = route('classifieds.home.index');
            }
        }
        
        return $this->response();
    }
    
}