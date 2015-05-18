@extends('layouts.default')

@section('title')
  {{Lang::get('payments.payments')}}
@stop
@section('content')
<a class="ui left labeled icon black button no-data-button"  href="{{route('payments.form')}}" onClick="modal(this,35)">
  <i class="plus icon"></i>
      {{Lang::get('payments.create_new_payment')}}
  </a>

<script src="/assets/js/react.js" type="text/javascript" charset="utf-8"></script>  
<script src="/assets/js/JXTransformer.js" type="text/jsx" charset="utf-8"></script>

@stop