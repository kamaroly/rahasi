@extends('layouts.default')

@section('title')
{!! trans('settings.api') !!}
@stop

@section('content')
 {!! Form::open(['route'=>'settings.save','method'=>'post','accept-charset'=>'utf-8','class'=>'ui form segment']) !!}

  <div class="three fields">
    <div class="field">
      <label>{{Lang::get('settings.test_secret_key')}}</label>
      <input type="text" name= "test_secret_key" value ="{!! Setting::get('test_secret_key') !!}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.test_publishable_key')}}</label>
      <input type="text" name= "test_publishable_key" value ="{!! Setting::get('test_publishable_key') !!}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.live_secret_key')}}</label>
      <input type="text" name= "live_secret_key" value ="{!! Setting::get('live_secret_key') !!}">
    </div>

    <div class="field">
      <label>{{Lang::get('settings.live_publishable_key')}}</label>
      <input type="text" name= "live_publishable_key" value ="{!! Setting::get('live_publishable_key') !!}">
    </div>
      <input type="submit" class="ui green submit button" value="{{ lang::get('general.save') }}"/>
  <div  class="ui reset red button">Close</div>
</div>
  {!! Form::close() !!}
@stop