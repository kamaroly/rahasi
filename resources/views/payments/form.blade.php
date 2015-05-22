@extends('layouts.modal')
@section('content')

{!! Form::open(array('route' => 'payments.store','class'=>'ui form rahasi-form ' )) !!}
 <div class="inline  fields">
    <div class="required field" >
      <label class="fix wide column left ">{!! trans('payments.phone_number') !!}</label>
      <input type="text"  name="phone_number" placeholder="250722000000">
    </div>

    <div class="required field" >
      <label class="fix wide column left ">{!! trans('payments.amount') !!}</label>
      <input type="text" name="amount" placeholder="500.0">
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('payments.description') !!}</label>
      <input type="text" name="description" placeholder="{!! trans('payments.description') !!}">
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('payments.statement_desc') !!}</label>
      <input type="text" name="statement_desc" placeholder="{!! trans('payments.statement_desc') !!}">
    </div>

 <div class="ui accordion field">
 <div class="ui divider"></div>
        <div class="title" onclick="toggle_visibility('accordion')">
          <i class="icon dropdown"></i>
          {!! trans('payments.more_options') !!}
        </div>
        <div id="accordion" style="display:none">
         <div class="field" >
          <label>{!! trans('payments.owner_name') !!}</label>
          <input name="owner_name" type="text">
        </div>
         <div class="field" >
          <label>{!! trans('payments.country') !!}</label>
          <input name="country" type="text">
        </div>
         <div class="field" >
          <label>{!! trans('payments.city') !!}</label>
          <input name="city" type="text">
        </div>
         <div class="field" >
          <label>{!! trans('payments.address') !!}</label>
          <input name="address" type="text">
        </div>
     </div>
  </div>

     
<div class="field">
  <button type="submit" class="ui bottom attached green button" style="width:100%">{!! trans('payments.create_payment') !!}</button>
</div>
</div>

{!! Form::close() !!}

@stop
