<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RAHASI | SIGN UP</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/assets/css/rahasi.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <script src="/assets/js/jQuery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="/assets/js/semantic.js" type="text/javascript" charset="utf-8">  </script>

  </head>
  <body class="register-page">
    <div class="register-box">
      <div class="register-box-body">
        <p class="login-box-msg">
        <div class="login-logo">
            Register to <b>RAHA</b>SI</a>
          </div>
        </p>
         <form method="POST" action="{{ route('sentinel.register.user') }}" accept-charset="UTF-8" id="register-form" class="ui form">
                      {{-- If Usernames are enabled, add username field --}}
           @if (config('sentinel.allow_usernames'))
            <div class="field form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Username" name="username" type="text" value="{{ Input::old('username') }}">
                {{ ($errors->has('username') ? $errors->first('username') : '') }}
            </div>
           @endif

            <div class="field form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ Input::old('email') }}">
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="field form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Password" name="password" value="" type="password">
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="field form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" value="" type="password">
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
            <div class="ui hidden divider"></div>
              <div class="field">
               <div class="ui login toggle checkbox">
                <input type="checkbox" name="rememberMe" value="rememberMe" >
                <label>I agree to the terms</label>
              </div>
             <input name="_token" value="{{ csrf_token() }}" type="hidden">
                 &nbsp; &nbsp; &nbsp; &nbsp;<button type="submit" class="ui submit green button">Register</button>
             </div>  
              <div class="ui hidden divider"></div>
             <a href="/login" class="text-center">I already have a membership</a>
          </div>
        </div>
        </form>        
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
    </div>
      <script type="text/javascript" charset="utf-8">
            $('.login.checkbox').checkbox('attach events', '.toggle.button'); 
  </script>
</body>
</html>