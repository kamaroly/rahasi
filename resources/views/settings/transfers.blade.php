@extends('settings.index')

@section('title')
{!! trans('settings.api') !!}
@stop

@section('settings-body')

    <a class="ui left labeled icon green button no-data-button" href="http://localhost:8000/account/transfers/add" onclick="modal(this,38)">
  <i class="plus icon"></i>
  {{ trans('settings.transfers.add') }}
  </a>

@stop