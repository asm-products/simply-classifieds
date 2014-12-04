<?php

namespace Stevebauman\Classifieds\Models;

use Stevebauman\Classifieds\Models\BaseModel;

class User extends BaseModel {
    
    public function getFullNameAttribute(){
        return sprintf("%s %s", $this->attributes['first_name'], $this->attributes['last_name']);
    }
    
}