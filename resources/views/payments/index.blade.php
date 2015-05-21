@extends('layouts.default')

@section('title')
  {{Lang::get('payments.payments')}}
@stop
@section('content')
<a class="ui left labeled icon black button no-data-button"  href="{{route('payments.create')}}" onClick="modal(this,24)">
  <i class="plus icon"></i>
      {{Lang::get('payments.create_new_payment')}}
  </a>

@include('payments.table',compact('payments'))
@stop