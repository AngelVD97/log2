<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{!! asset('estilos.css') !!}">
</head>
<body>

<!-------------------------------------------------------------------------------------------------- -->

@include('partials.nav')
    <h1>login</h1>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

<form method="POST">
    @csrf
  <div class="group">
    
    <input name='email' type="email" required autofocus value="{{ old('email') }} " placeholder="Email"><span class="highlight"></span><span class="bar"></span>
    <label></label>
       
  </div>
  <div class="group">
    <input name='password' type="password" required placeholder="Password"><span class="highlight" ></span><span class="bar"></span>
    <label></label>
  </div>
  <div class="group">
    <label id="check">
   
            <input type="checkbox" name="remember">
            Recuerdame
        </label><br>
    </div>
  <button type="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

<!--------------------------------------------------------------------------------------------- 



    @include('partials.nav')
    <h1>login</h1>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    <form method="POST">
        @csrf
        <label>
            <input name='email' type="email" required autofocus value="{{ old('email') }} " placeholder="Email">
        </label>
        <label><br>
            <input name='password' type="password" required placeholder="Password">
        </label><br>
        <label>
            <input type="checkbox" name="remember">
            Recuerda mi sesion
        </label><br>
        <button type="submit">login</button>

    </form>
</body>
</html>