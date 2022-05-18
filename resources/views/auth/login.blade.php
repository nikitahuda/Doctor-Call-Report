<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'DSR')">
    <meta name="author" content="@yield('meta_author', 'Ashik Chowdhury')">
@yield('meta')

{{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
@stack('before-styles')

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         
         <!-- Ajax -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
         
         <!-- Select2 -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
         
         <!-- sweetalert2 -->
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         
         <!-- animate css -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background: url({{URL::asset('dist/img/logo/login_bg.png')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .clock-bottom {
            background-color: transparent;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            padding: 20px 0 35px 35px;
            color: #191a24;
            text-shadow: 0 1px 1px rgba(0,0,0,.4);
            text-align: left;
            font-family: Open Sans;
            font-size: larger;
        }
        .login {
            background-color: rgba(67, 143, 165, 0.21) !important;
            border-radius: 4px;
            border: 0px solid transparent !important;
            box-shadow: 0 10px 10px rgba(0,0,0,.50)!important;
        }

        .btn {
            box-shadow: 0 10px 10px rgba(0,0,0,.25)!important;
        }

        a {
            color: #000000 !important;
            text-shadow: 0 10px 10px rgba(0,0,0,.95)!important;
        }



.login-card-body .input-group .form-control:focus,
.register-card-body .input-group .form-control:focus {
  box-shadow: none;
}

.login-card-body .input-group .form-control:focus ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control:focus ~ .input-group-append .input-group-text {
  border-color: #80bdff;
}

.login-card-body .input-group .form-control.is-valid:focus,
.register-card-body .input-group .form-control.is-valid:focus {
  box-shadow: none;
}

.login-card-body .input-group .form-control.is-valid ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control.is-valid ~ .input-group-append .input-group-text {
  border-color: #28a745;
}

.login-card-body .input-group .form-control.is-invalid:focus,
.register-card-body .input-group .form-control.is-invalid:focus {
  box-shadow: none;
}

.login-card-body .input-group .form-control.is-invalid ~ .input-group-append .input-group-text,
.register-card-body .input-group .form-control.is-invalid ~ .input-group-append .input-group-text {
  border-color: #dc3545;
}


.login-box-msg,
.register-box-msg {
  margin: 0;
  padding: 0 20px 20px;
  text-align: center;
}
    </style>

    @stack('after-styles')
</head>
<body class="hold-transition">
<div class="row col-sm-12">
    <div class="col-sm-4 col-xs-4 offset-sm-4" style="padding-top: 120px; padding-left: 60px; font-size: 12px">
        <div class="login-box" id="app">
            <div class="login-logo">
                <img src="dist/img/logo/DCR.png" class="img-responsive img-fluid center-block" alt="DSR">         
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg d-flex justify-content-center">LOGIN</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                        <input style="border-right:0 solid transparent;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <div class="input-group-append">
                                <div class="input-group-text" style="background-color:transparent !important; border-left:0 solid transparent;">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" style="border-right:0 solid transparent;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color:transparent !important; border-left:0 solid transparent;">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 ml-3 pl-5 pb-2 pt-2">
                            <div class="icheck-primary">
                            <label class="form-check-label" for="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <b>

                                    {{ __('Remember Me') }}
                                </b>
                                    </label>    
                        </div>
                        </div>

                        @if(config('access.captcha.login'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div><!--col-->
                            </div><!--row-->
                    @endif

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Login') }}
                                </button>


                </div>
                <div class="card-footer p-1">
                    <p class="text-center p-0">
                        &copy; {{ date('Y') }} All rights reserved <br>
                            {{-- <b>ISA - ERP [Web Team] - Transcom Ltd</b>--}}
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        </form>
    </div>
</div>

<!-- /.login-box -->
<!-- Bootsrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
       
       <!-- Ajax -->
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
       
       <!-- select2 -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
       @if($errors->any())
    <script>
        $(function () {
            toastr.error('{!! implode('<br/>', $errors->all()) !!}')
        });
    </script>

@elseif(session()->get('flash_success'))
    <script>
        @if(is_array(json_decode(session()->get('flash_success'), true)))
        $(function () {
            toastr.success('{{ implode('', session()->get('flash_success')->all(':message<br/>')) }}');
        });
        @else
        $(function () {
            toastr.success('{{ session()->get('flash_success') }}');
        });
        @endif
    </script>

@elseif(session()->get('flash_warning'))
    <script>
        @if(is_array(json_decode(session()->get('flash_warning'), true)))
        $(function () {
            toastr.warning('{{ implode('', session()->get('flash_warning')->all(':message<br/>')) }}');
        });
        @else
        $(function () {
            toastr.warning('{{ session()->get('flash_warning') }}');
        });
        @endif
    </script>

@elseif(session()->get('flash_info'))
    <script>
        @if(is_array(json_decode(session()->get('flash_info'), true)))
        $(function () {
            toastr.info('{{ implode('', session()->get('flash_info')->all(':message<br/>')) }}');
        });
        @else
        $(function () {
            toastr.info('{{ session()->get('flash_info') }}');
        });
        @endif
    </script>

@elseif(session()->get('flash_danger'))
    <script>
        @if(is_array(json_decode(session()->get('flash_danger'), true)))
        $(function () {
            toastr.error('{{ implode('', session()->get('flash_danger')->all(':message<br/>')) }}')
        });
        @else
        $(function () {
            toastr.error('{{ session()->get('flash_danger') }}');
        });
        @endif
    </script>

@elseif(session()->get('flash_message'))
    <script>
        @if(is_array(json_decode(session()->get('flash_message'), true)))
        $(function () {
            toastr.info('{{ implode('', session()->get('flash_message')->all(':message<br/>')) }}');
        });
        @else
        $(function () {
            toastr.info('{{ session()->get('flash_message') }}');
        });
        @endif
    </script>
@endif

       @stack('after-scripts')
</body>
</html>
