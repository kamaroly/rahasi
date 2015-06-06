@extends('layouts.default')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/settings.css">
<div class="account-settings-dialog modal-dialog-view account-settings">
<div class="modal_container" style="display: block;">
<div class="modal" >
<div class="account-settings-view standard">
<div class="modal-inner">
<div class="modal-header toolbar">
<h2 style="float:left;"> {!! trans('settings.settings') !!}</h2>
  <div id="subnavigation" class="account-settings-navigation-view"><ul>
  <li class="account selected"><a href="/account" class="general_icon">General</a><span class="border left"></span><span class="border right"></span></li>
  <li class="team"><a href="/account/team" class="team_icon">Team</a></li>
  <li class="apikeys"><a href="/account/apikeys" class="key_icon">API Keys</a></li>
  <li class="recurring"><a href="/account/recurring" class="calendar_icon">Subscriptions</a></li>
  <li class="transfers"><a href="/account/transfers" class="transfers_icon">Transfers</a></li>
  <li class="webhooks"><a href="/account/webhooks" class="webhooks_icon">Webhooks</a></li>
  <li class="applications"><a href="/account/applications" class="applications_icon">Connect</a></li>


  <li class="data"><a href="/account/data" class="test_data_icon">Data</a></li>
  <li class="emails"><a href="/account/emails" class="emails_icon">Emails</a></li>


</ul>
</div></div>
  <div class="sheet">
  </div>
  <div class="modal-content account-settings-view-content">
    <div class="main"><div class="settings-view">
<div class="tab-bar" id="general-settings-tab-bar">
<a class="ui left labeled icon black button no-data-button" href="http://localhost:8000/payments/create" onclick="modal(this,28)">
  <i class="plus icon"></i>
      Create a new payment
  </a>
  <button class="button medium blue active" name="general-container" href="/account"><span>Account Info</span></button>
  <button class="button medium grey" name="business-container" href="/account/public"><span>Public Info</span></button>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
@stop