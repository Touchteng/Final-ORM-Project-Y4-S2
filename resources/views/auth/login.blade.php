<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vdoo Real Estate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="{{asset('admin/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
        
    </head>
    <body>
    <div class="auth">
            <div class="auth-container" style='width:500px'>
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <img src="{{asset('admin/images/logo.png')}}" alt="Vdoo ERP">
                            Job Portal
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">LOGIN TO CONTINUE</p>
                        @if(count($errors)>0)
                            <div class="alert alert-warning" role="alert">
                                Invalid username or password!

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control underlined" name="username" placeholder="username" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" placeholder="password" id="password" required>
                            </div>
                            <p>&nbsp;</p>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    <script src="{{asset('admin/js/vendor.js')}}"></script>
    <script src="{{asset('admin/js/app.js')}}"></script>
</body>
</html>