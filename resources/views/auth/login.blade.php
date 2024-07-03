<!doctype html>
<html lang="en">
  <title>Login</title>
  <head>
    <style>
      img{
        border-radius: 100%;
      }
    </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="container">
    
    
  <form action="{{ route('auth.authenticate') }}" method="POST" class="container"><br>
      @csrf
    <center>
      <img class="mb-4" src="gambar/Gambar.png" alt="" width="200px" height="200px">
      <h1 class="h3 mb-3 fw-normal">Silakan Login Karya Anak Tolikara</h1><hr>  
    </center>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="rikatyecksonweya@example.com">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
<br><br>

    <div class="row">
      <div class="col">
        <input type="checkbox" value="remember-me"> Remember me
      </div>
      <div class="col">
        <button class="w-100 btn btn-lg btn-primary btn-sm" type="submit">Login</button>
      </div>
    </div>
  </form>
  </body>
</html>