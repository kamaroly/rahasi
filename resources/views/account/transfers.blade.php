@extends('account.index')

@section('title')
{!! trans('account.api') !!}
@stop

@section('account-body')

    <a class="ui left labeled icon green button no-data-button" href="{{ route('account.banks.create') }}" onclick="modal(this,38)">
  <i class="plus icon"></i>
  {{ trans('account.transfers.add') }}
  </a>

@stop