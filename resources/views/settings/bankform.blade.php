{!! Form::open(array('route' => 'payments.store','class'=>'ui form rahasi-form ' )) !!}
 <div class="inline  fields">
    <div class="required field" >
      <label class="fix wide column left ">{!! trans('settings.currency') !!}</label>
      <select name="currency" style="float:right">
        <option value="usd">USD</option>
      </select>
    </div>

    <div class="required field" >
      <label class="fix wide column left ">{!! trans('settings.bank_country') !!}</label>
       <select name="bank_country" style="float:right">
        <option value="RW">Rwanda</option>
      </select>
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('settings.routing_number') !!}</label>
      <input type="text" name="routing_number" >
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('settings.account_number') !!}</label>
      <input type="text" name="account_number">
    </div>
    <div class="field" >
      <label class="fix wide column">{!! trans('settings.account_number_confirm') !!}</label>
      <input type="text" name="account_number_confirm">
    </div>

<div class="field">
  <button type="submit" class="ui bottom attached green button" style="width:100%">{!! trans('settings.add_bank') !!}</button>
</div>
</div>
{!! Form::close() !!}