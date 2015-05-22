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
        <div class="title" onclick="toggle_visibility('accordion')">
          <i class="icon dropdown"></i>
          Optional Details
        </div>
        <div class="content field" id="accordion">
          <label>Maiden Name</label>
          <input placeholder="Maiden Name" type="text">
               <div class="two fields">
        <div class="field">
          <label>First Name</label>
          <input placeholder="First Name" type="text">
        </div>
        <div class="field">
          <label>Last Name</label>
          <input placeholder="Last Name" type="text">
        </div>
      </div>
    </div>
  </div>
 <div class="field">
     <button class="ui blue submit right button">{!! trans('payments.create_payment') !!} </button>
  </div>
</div>
{!! Form::close() !!}

@stop
