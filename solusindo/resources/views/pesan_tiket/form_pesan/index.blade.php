<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pembelian Tiket Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tiket">tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                </ul>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" >
                      <div>Logout</div>
                    </button>
                  </form>
            </div>
            </div>
        </nav>
    {{-- navbar --}}

    {{-- content --}}
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-11">
                <form action="addTiket" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card p-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Nama lengkap</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="input nama lengkap">
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">foto</label>
                            <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="input nama lengkap">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">tempat</label>
                        <input type="text" name="tempat"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal lahir</label>
                        <input type="date" name="tanggal_lahir"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">kebangsaan</label>
                        <input type="text" name="kebangsaan"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tempat tinggal</label>
                        <input type="text" name="tempat_tinggal"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">telp</label>
                        <input type="number" name="telp"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">pesan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- content --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>