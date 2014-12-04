<?php

namespace Stevebauman\Classifieds\Controllers;

use Stevebauman\Classifieds\Services\KijijiTransferService;
use Stevebauman\Classifieds\Validators\TransferValidator;
use Stevebauman\Classifieds\Controllers\BaseController;

class TransferController extends BaseController {
    
    public function __construct(TransferValidator $tranferValidator, KijijiTransferService $kijiji)
    {
        $this->transferValidator = $tranferValidator;
        $this->kijiji = $kijiji;
    }
    
    public function getIndex()
    {
        return view('classifieds::transfer.index', array(
            'title' => 'Transfer Your Classifieds Ad'
        ));
    }
    
    public function postIndex()
    {
        $validator = new $this->transferValidator;
        
        if($validator->passes()){
            
            $ad = $this->kijiji->transfer($this->input('url'));
            
            return view('classifieds::transfer.preview', array(
                'title' => 'Is this your ad?',
                'ad' => $ad
            ));
            
        } else {
            $this->errors = $validator->getErrors();
            $this->redirect = route('classifieds.transfer.index');
        }
        
        return $this->response();
    }
    
}