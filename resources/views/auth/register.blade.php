<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">

    
    <title>SPS | Sistema de Inventario</title>
  </head>
  <body>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control{{ $errors->has('name') ? ' is-invalid': '' }}">
        
                @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" required class="form-control{{ $errors->has('email') ? ' is-invalid': '' }}">
        
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" required class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}">
        
                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Retyped Password</label>
                <input type="password" name="password_confirmation" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register!</button>
        </form>
    
        <footer>
          <!-- Copyright -->
          <div class="footer-copyright text-center py-2" style="color: azure;font-size: 12px;">© 2020 Copyright, developed
            by
            Ing. André Bolaños</div>
          <!-- Copyright -->
        </footer>


      <script src="{{ mix('js/app.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  </body>
</html>