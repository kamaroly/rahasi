<<<<<<< HEAD
@include('partials.css')
@include('partials.js')
<div class="ui segment">
    <div class="ui fluid form">
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
      <div class="ui accordion field">
        <div class="title">
          <i class="icon dropdown"></i>
          Optional Details
        </div>
        <div class="content field">
          <label>Maiden Name</label>
          <input placeholder="Maiden Name" type="text">
        </div>
      </div>
      <div class="ui secondary submit button">Sign Up</div>
    </div>
  </div>
  
<script type="text/javascript">
  $('.ui.accordion').accordion();
</script>
=======
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
      <input type="text" name="descripton" placeholder="{!! trans('payments.description') !!}">
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('payments.statement_desc') !!}</label>
      <input type="text" name="statement_desc" placeholder="{!! trans('payments.statement_desc') !!}">
    </div>
    <div class="field">
     <button class="ui blue submit right button">{!! trans('payments.create_payment') !!} </button>
    </div>
</div>
{!! Form::close() !!}
>>>>>>> a9ecebf95308b7ef07514f5653835fe27cbe41e7
