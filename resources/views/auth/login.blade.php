<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header bg-dark text-white">
            <div class="row">
                <div class="col-sm-12 text-center ">
                    <h2>Login</h2>
                </div>
            </div>
        </section>
        <section class="content bg-info">
            <hr class="mb-4">
            <div class="container-fluid">
                <div class="login-box-body">
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <form action="{{ route('login') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="col-md-3">
                            @csrf
                            <!--Email-login-->
                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Email" required autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- Password  -->
                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required
                                    placeholder="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group row ">
                                <div class=" col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        {{ __('Iniciar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
            </footer>
        </section>
    </div>

</body>
</html>
