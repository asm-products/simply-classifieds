<?php

namespace Stevebauman\Classifieds\Validators;

use Stevebauman\Classifieds\Validators\BaseValidator;

class TransferValidator extends BaseValidator {
    
    protected $rules = array(
        'url' => 'required|url|transfer_url'
    );
    
}