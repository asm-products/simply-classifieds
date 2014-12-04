@extends('classifieds::layouts.main')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-heading">
        <h3 class="panel-title">Your Kijiji Ad Preview</h3>
    </div>
    <style>
        .carousel img {
        min-width: 90%;
        min-height: 500px;
      }
    </style>
    <div class="panel-body">
        
        {{ $ad->title }}
        
        {{ $ad->description }}
        
        @if(count($ad->images) > 0)
        <div id="carousel-example-generic" class="carousel slide col-md-6" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($ad->images as $key=>$src)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="active"></li>
                @endforeach
                
            </ol>
            
            <div class="carousel-inner">
            @foreach($ad->images as $key=>$src)
                <div class="item @if($key == 0) active @endif">
                    <img class="img-responsive" src="{{ $src }}">
                    <div class="carousel-caption">
                    </div>
                </div>
            @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        @endif
        
    </div>
    
</div>

@stop