<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="row justify-content-center">
      <div class="col-lg-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
  
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('loginError') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
  
          <h1 class="h3 mb-3 fw-normal text-center">Please Login in</h1>
          <div class="card p-3">
              <main class="form-signin mt-5" >
                <form action="/" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
              
                  
                  <button class="w-100 btn btn-lg btn-primary mt-4" name="submit" type="submit">Login in</button>
                </form>
              </main>
          </div>
      </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
