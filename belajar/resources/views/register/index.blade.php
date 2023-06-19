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
    <link rel="stylesheet" href="/css/register.css" />
  </head>
  <body>
    <div class="container">
      <div class="card register-form">
        <div class="card-body">
          <h2 class="card-title">Registration</h2>
          <h6 class="sub-title text-muted mb-5">Please registration to login the website !</h6>

          <form action="/register" method="post">
            @csrf
            <div class="mb-4">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="enter your name" required value="{{ old('name') }}"/>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="enter your username" required value="{{ old('username') }}" />
              @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="enter your email" required value="{{ old('email') }}"/>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder="enter your password" required />
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary btn-register">Submit</button>
            </div>

            <div class="mt-3">
              <label class="d-block text-center" style="font-weight: 400" for="">Already an account ? <a href="/login" class="link">Login</a></label>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="register.js"></script>
  </body>
</html>
