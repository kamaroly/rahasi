@extends('layouts.default')

@section('title')
{!! trans('settings.api') !!}
@stop

@section('content')

<div class="ui form">
  <div class="two fields">
    <div class="field">
         <div class="key secret">
            <label class="default-label">{{Lang::get('settings.test_secret_key')}}:</label>
            <div class="container">
                <span class="value">sk_test_KkrSYUKtnv7mXXzTgYHNzVG5</span>
                <a id="test_secret_key" href="#"  title="Roll Key">
                  <i class="refresh icon testkey"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="field">
         <div class="key secret test">
            <label class="default-label">{{Lang::get('settings.test_publishable_key')}}:</label>
            <div class="container">
                <span class="value" id="test_pk">sk_live_KkrSYUKtnv7mXXzTgYHNzVG5</span>
                <a id="test_publishable_key" >
                  <i class="refresh icon testkey"></i>
                </a>
            </div>
        </div>
     </div>
   </div>
   <div class="ui divider"></div>
   <div class="two fields">
    <div class="field">
      <div class="key secret">
            <label class="default-label">{{Lang::get('settings.live_secret_key')}}:</label>
            <div class="container">
                <span class="value">sk_live_KkrSYUKtnv7mXXzTgYHNzVG5</span>
                <a class="roll" href="" rel="tooltip" title="Roll Key">
                  <i class="refresh icon"></i>
                </a>
            </div>
        </div>
    </div>
    
    <div class="field">
      <div class="key secret">
            <label class="default-label">{{Lang::get('settings.live_publishable_key')}}:</label>
            <div class="container">
                <span class="value">sk_live_KkrSYUKtnv7mXXzTgYHNzVG5</span>
                <a class="roll" href="" rel="tooltip" title="Roll Key">
                  <i class="refresh icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@stop