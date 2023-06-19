<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- CSS -->
    <link rel="stylesheet" href="/css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="card login-form">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="card-body">
          <h2 class="card-title">Sign in</h2>
          <h6 class="sub-title text-muted mb-5">Please login to enter the website !</h6>

          <form action="/login" method="post">
            @csrf
            <div class="mb-4">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="enter your email" />
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="enter your password" />
            </div>

            <div class="d-flex justify-content-between">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="">Remember me</label>
              </div>

              <div>
                <a href="#" class="link">Forgot Password ?</a>
              </div>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary btn-login">Login</button>
            </div>

            <div class="mt-3">
              <label class="d-block text-center" style="font-weight: 400" for="">Not register ? <a href="/register" class="link">Create an account</a></label>
            </div>

            <div class="d-grid mt-3">
              <button type="submit" class="btn btn-light btn-google"><i class="bi bi-google"></i> <a href="google.com"> Sign in with google</a></button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="login.js"></script>
  </body>
</html>
