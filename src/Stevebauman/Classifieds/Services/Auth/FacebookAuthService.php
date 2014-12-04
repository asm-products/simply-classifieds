<?php

namespace Stevebauman\Classifieds\Services;

use Stevebauman\Classifieds\Services\AbstractOAuthService;

class FacebookAuthService extends AbstractOAuthService {
    
    public function __construct(SentryService $sentry){
        $this->consumer = 'Facebook';
        $this->request = '/me';
    }
    
    
    
}