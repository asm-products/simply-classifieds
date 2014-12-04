<?php

namespace Stevebauman\Classifieds\Controllers;

use Stevebauman\Classifieds\Controllers\BaseController;

class HomeController extends BaseController {
    
	public function getIndex()
	{
            return view('classifieds::home.index', array(
                'title' => 'Home'
            ));
	}

}
