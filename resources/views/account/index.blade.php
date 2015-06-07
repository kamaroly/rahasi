@extends('layouts.default')

@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/settings.css">
<div class="account-settings-dialog modal-dialog-view account-settings">
    <div class="modal_container" style="display: block;">
        <div class="modal" >
            <div class="account-settings-view standard">
                <div class="modal-inner">
                    <div class="modal-header toolbar">
						@include('account.menu')
                    </div>
                    <div class="sheet"></div>
                    <div class="modal-content account-settings-view-content">
                        <div class="main">
                            <div class="settings-view">
								@yield('account-body')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop