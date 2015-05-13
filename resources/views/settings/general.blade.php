 {!! Form::open(['route'=>'settings.general.save','method'=>'post','accept-charset'=>'utf-8','class'=>'ui form segment']) !!}
  <div class="two fields">
    <div class="field">
      <label>{{Lang::get('settings.account_name')}}</label>
      <input type="text" name="account_name" placeholder="{{Lang::get('settings.account_name')}}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.country')}}</label>
      <input type="text" name="country" placeholder="{{ Lang::get('settings.country')}}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.timezone')}}</label>
      <input type="text" name="timezone" placeholder="{{Lang::get('settings.timezone')}}">
    </div>
    <div class="field">
      <label>{{Lang::get('settings.name')}}</label>
      <input type="text" name="name" placeholder="{{Lang::get('settings.name')}}">
    </div>

   <div class="field">
      <label>{{Lang::get('settings.website')}}</label>
      <input type="text" name="website" placeholder="{{Lang::get('settings.website')}}">
    </div>
     <div class="field">
      <label>{{Lang::get('settings.statement_description')}}</label>
      <input type="text" name="statement_description" placeholder="{{Lang::get('settings.statement_description')}}">
    </div>
     <div class="field">
      <label>{{Lang::get('settings.support_website')}}</label>
      <input type="text" name="support_website" placeholder="{{Lang::get('settings.support_website')}}">
    </div>

     <div class="field">
      <label>{{Lang::get('settings.email')}}</label>
      <input type="text" name="email" placeholder="{{Lang::get('settings.email')}}">
    </div>

    <div class="field">
      <label>{{Lang::get('settings.phone')}}</label>
      <input type="text" name="phone" placeholder="{{Lang::get('settings.phone')}}">
    </div>
  </div>
  <div class="field">
     <label>{{Lang::get('settings.address')}}</label>
      <input type="text" name="address" placeholder="{{Lang::get('settings.address')}}">
  </div>
  <input type="submit" class="ui green submit button" value="{{ lang::get('general.save') }}"/>
  <div  class="ui reset red button">Close</div>
</div>
</form>