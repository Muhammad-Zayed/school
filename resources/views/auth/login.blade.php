<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('app/css/login/style.css' )}}" /> 
    <link rel="stylesheet" href="{{asset('app/css/login/normalize.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel+Sans&display=swap">
  </head>
  <body>
    <div class="container">
      <div class="form_info">
        <form action="{{ route('login') }}" method="POST">
          <h1 id="h1"> Login </h1>
          @csrf
          <label for="emil" id="l1"> Email </label>
          <input type="text" placeholder="Enter Your Email" id="userName" name="email" value="{{ old('email') }}" required autocomplete="email"/>
          <label for="pass" id="l2"> Password </label>
          <input type="password" placeholder="Enter Your Password" id="pass" name="password" required autocomplete="current-password"/>
          @if (Route::has('register'))
                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
          <input type="submit" value="Login"> 
        </form>
      </div>
      <div class="pic">
        <div class="content">
          <h1 id="h2"> Welcome To "A+ School" Login Form </h1>
        </div>
        <div class="photo">
          <img class="responsive-img" src="{{  asset('app/pics/login/login1.png') }}">
        </div>
      </div>
    </div>

    
    

    <!-- Start Scripts -->
    <script src="{{ asset('app/js/jquery.js') }}"></script>
    <!-- End Scripts -->
  </body>
</html>