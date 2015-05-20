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