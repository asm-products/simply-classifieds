@extends('classifieds::layouts.main')


<div class="col-md-4 col-md-offset-2">
    
    <h3>Have a social media account? Log in with one now.</h3>
    
    <hr>
    
    <ul class="list-unstyled">
        <li>
            
            <a class="btn btn-primary btn-facebook" href="{{ route('classifieds.auth.login.facebook') }}">
                <i class="fa fa-facebook-square"></i> Log in with Facebook
            </a>
            
            <a class="btn btn-primary btn-facebook" href="">
                <i class="fa fa-twitter-square"></i> Log in with Twitter
            </a>
            
            <a class="btn btn-primary btn-facebook" href="">
                <i class="fa fa-google-plus-square"></i> Log in with Google
            </a>
            
        </li>
    </ul>
    
</div>

<div class="col-md-4">
    
    <h3>Or Not...</h3>
    
    <div class="well">
        
        
        
    </div>
</div>