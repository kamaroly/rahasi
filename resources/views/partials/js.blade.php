<!-- jQuery 2.1.3 -->
<script src="/assets/js/jsmodal-1.0d.js"></script>
<script src="/assets/js/jQuery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/js/semantic.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/js/app.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
		$('.ui.form')
  .form({
    name: {
      identifier  : 'name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your name'
        }
      ]
    },
    gender: {
      identifier  : 'gender',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please select a gender'
        }
      ]
    },
    username: {
      identifier : 'username',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a username'
        }
      ]
    },
    password: {
      identifier : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    },
    terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'You must agree to the terms and conditions'
        }
      ]
    }
  });
</script>
@yield('js')