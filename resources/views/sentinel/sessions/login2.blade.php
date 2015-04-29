<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> RAHASI | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
         <link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/assets/css/rahasi.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/assets/css/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      <script src="/assets/js/jQuery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="/assets/js/semantic.js" type="text/javascript" charset="utf-8"></script>
 
  </head>
  <body class="login-page">
    <div class="login-box">

      <div class="login-box-body">
        <p class="login-box-msg"> 
          <div class="login-logo">
            Welcome to the <b>RAHA</b>SI</a>
          </div>
         </p>
        <form method="POST" action="{{ route('sentinel.session.store') }}" accept-charset="UTF-8" class="ui form">
        
         <h4 class="ui dividing header"></h4>
          {{-- Username Field --}}
            <div class="fuild field">
              <label>E-Mail</label>
                <div class="field">
                  <input class="form-control" placeholder="Email" autofocus="autofocus" name="email" type="text" value="{{ Input::old('email') }}">
                  @if($errors->has('email')) 
                   <span class="error">{{ $errors->first('email')}}</span>
                  @endif
                </div>
            </div>
            
           {{-- Password Field --}}
           <div class="fuild field">
              <label>Password</label>
                <div class="field">
                  <input class="form-control" placeholder="Password" name="password" value="" type="password">
                  @if($errors->has('password')) 
                   <span class="error">{{ $errors->first('password')}}</span>
                  @endif
                </div>
            </div>
           <div class="ui hidden divider"></div>
              <div class="field">
               <div class="ui login toggle checkbox">
                <input type="checkbox" name="rememberMe" value="rememberMe" checked="checked">
                <label>Remember <b>me</b> for the next login.</label>
              </div>
             </div>
           <input name="_token" value="{{ csrf_token() }}" type="hidden">
           {{-- Login button --}}
           <button class="ui fluid submit green button">Login</button>
        </form>
         
      </div><!-- /.login-box-body -->
     <div class="login-box">
       <button class="ui fluid submit black button">Don't have an account? 
        <a href="/register" title="Signup">Sign up</a>
       </button>
    </div>
    </div><!-- /.login-box -->
    
  <script type="text/javascript" charset="utf-8">
   $('.login.checkbox').checkbox('attach events', '.toggle.button'); 
  </script>
  </body>
</html>