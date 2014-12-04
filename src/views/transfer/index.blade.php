@extends('classifieds::layouts.main')

@section('content')

<div class="col-md-12">
    
    
    
    {{ Form::open(array('url'=>route('classifieds.transfer.index'), 'class'=>'form-horizontal')) }}
    
    <div class="form-group">
        {{ Form::text('url', NULL, array('class'=>'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::submit('Transfer', array('class'=>'btn btn-primary')) }}
    </div>
    
    {{ Form::close() }}
    
</div>

@stop