@extends('account.index')

@section('title')
{!! trans('account.api') !!}
@stop

@section('account-body')

<div class="ui form">
  <div class="two fields">
    <div class="field">
         <div class="key secret">
            <label class="default-label">{{Lang::get('account.test_secret_key')}}:</label>
            <div class="container">
                <span id="test_sk">{!! $keys->test_sk !!}</span>
                <a id="test_sk_refresh" href="#"  title="Roll Key">
                  <i class="refresh icon testkey"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="field">
         <div class="key secret test">
            <label class="default-label">{{Lang::get('account.test_publishable_key')}}:</label>
            <div class="container">
                <span id="test_pk">{!! $keys->test_pk !!}</span>
                <a id="test_pk_refresh" >
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
            <label class="default-label">{{Lang::get('account.live_secret_key')}}:</label>
            <div class="container">
                <span id="live_sk">{!! $keys->live_sk !!}</span>
                <a  id="live_sk_refresh" rel="tooltip">
                  <i class="refresh icon"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="field">
      <div class="key secret">
            <label class="default-label">{{Lang::get('account.live_publishable_key')}}:</label>
            <div class="container">
                <span id="live_pk">{!! $keys->live_pk !!}</span>
                <a  id="live_pk_refresh" href="" rel="tooltip" title="Roll Key">
                  <i class="refresh icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@stop