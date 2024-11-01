<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        <title>Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="dashboard/css/bootstrap.min.css" />
		<link rel="stylesheet" href="dashboard/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="dashboard/css/maruti-login.css" />
    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
                @csrf
				 <div class="control-group normal_text"> <h3>Valia.gest Ads</div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email@exemplo.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*******">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="{{route('register')}}" class="flip-link btn btn-inverse" id="to-recover">Não tem conta?,criar conta</a></span>
                    <span class="pull-right p-2"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
           
        </div>
        
        <script src="dashboard/js/jquery.min.js"></script>  
        <script src="dashboard/js/maruti.login.js"></script> 
    </body>

</html>
