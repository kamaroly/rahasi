<div class="ui tabular menu">
	<div class ="item active" id="tab" data-tab="tab-name">{{ Lang::get('settings.general')}}</div>
	<div class ="item" id="tab" data-tab="tab-name2">{{ Lang::get('settings.api')}}</div>
</div>
<div class="ui tab active" data-tab="tab-name">
  <!-- General settings !-->
  @include('settings.general')
</div>
<div class="ui tab" data-tab="tab-name2">
  <!-- API SETTINGS !-->
  @include('settings.api')
</div>
{{-- Add some javascript in the footer  --}}
