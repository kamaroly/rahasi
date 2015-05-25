@extends('layouts.default')

@section('title')
  {!! trans('settings.general') !!}
@stop

@section('content')
 {!! Form::open(['route'=>'settings.save','method'=>'post','accept-charset'=>'utf-8','class'=>'ui form segment']) !!}
  <div class="two fields">
    <div class="field">
      <label>{{Lang::get('settings.account_name')}}</label>
      <input type="text" name="account_name" value="{!! Setting::get('account_name') !!}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.country')}}</label>
      <input type="text" name="country" value="{!! Setting::get('.country') !!}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.timezone')}}</label>
      <input type="text" name="timezone" value="{!! Setting::get('timezone') !!}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.name')}}</label>
      <input type="text" name="name" value="{!! Setting::get('name') !!}">
    </div>

   <div class="field">
      <label>{{Lang::get('settings.website')}}</label>
      <input type="text" name="website" value="{!! Setting::get('website') !!}">
    </div>
     <div class="field">
      <label>{{Lang::get('settings.statement_description')}}</label>
      <input type="text" name="statement_description" value="{!! Setting::get('statement_description') !!}">
    </div>
     <div class="field">
      <label>{{Lang::get('settings.support_website')}}</label>
      <input type="text" name="support_website" value="{!! Setting::get('support_website') !!}">
    </div>

     <div class="field">
      <label>{{Lang::get('settings.email')}}</label>
      <input type="text" name="email" value="{!! Setting::get('email') !!}">
    </div>

    <div class="field">
      <label>{{Lang::get('settings.phone')}}</label>
      <input type="text" name="phone" value="{!! Setting::get('phone') !!}">
    </div>
  </div>
  <div class="field">
     <label>{{Lang::get('settings.address')}}</label>
      <input type="text" name="address" value="{!! Setting::get('address') !!}">
  </div>
  <input type="submit" class="ui green submit button" value="{{ lang::get('general.save') }}"/>
  <div  class="ui reset red button">Close</div>
</div>
</form>
@stop