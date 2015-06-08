<div class="inline  fields">
    <div class="required field" >
      <label class="fix wide column left ">{!! trans('account.currency') !!}</label>
      <select name="currency" style="float:right">
        <option value="usd">USD</option>
      </select>
    </div>

    <div class="required field" >
      <label class="fix wide column left ">{!! trans('account.bank_country') !!}</label>
       <select name="bank_country" style="float:right">
        <option value="RW">Rwanda</option>
      </select>
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('account.routing_number') !!}</label>
      <input type="text" name="routing_number" value="{!! $bank->routing_number !!}">
    </div>

    <div class="field" >
      <label class="fix wide column">{!! trans('account.account_number') !!}</label>
      <input type="text" name="account_number" value="{!! $bank->account_number !!}">
    </div>
    <div class="field" >
      <label class="fix wide column">{!! trans('account.account_number_confirm') !!}</label>
      <input type="text" name="account_number_confirm" value="{!! $bank->account_number !!}">
    </div>

<div class="field">
  <button type="submit" class="ui bottom attached green button" style="width:100%">{!! trans('account.add_bank') !!}</button>
</div>
</div>