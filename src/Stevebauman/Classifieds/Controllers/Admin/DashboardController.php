<?php

namespace Stevebauman\Classifieds\Controllers\Admin;

use Stevebauman\Classifieds\Controllers\BaseController;

class DashboardController extends BaseController {
    
    public function getIndex()
    {
        return view('classifieds::admin.dashboard.index', array(
            'title' => 'Administrator Dashboard'
        ));
    }
    
}