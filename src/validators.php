<?php

/*
 * Validator Registrations
 */

Validator::extend('transfer_url', 'Stevebauman\Classifieds\Validators\TransferUrlValidator@validateTransferUrl');

Validator::replacer('transfer_url', function($message, $attribute, $rule, $parameters){
    return "The URL provided is not from Kijiji or Ebay, please try again";
});