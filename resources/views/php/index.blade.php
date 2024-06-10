<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" constant="width=device-width, initisl-scale=1">
        <title>Login</title>
        <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <main class="container">
          <!-- LOGIN -->
          <div class="w-50 center border rounded px-3 py-3 mx-auto">
            <h1>Login</h1>
            <form action="{{ url('/php/login')}}" method="post">
              @csrf
              @method("POST")
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="" name="email" class="form-control" placeholder="text@gmail.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="********">
              </div>
              <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
              </div>
              <li class="nav-item">
                <label type="teks" class="center">Silahkan daftar terlebih dahulu !!!</label>
                <button href="" class="btn btn-primsry border mx-auto" type="submit">Sing in</button>
              </li>
            </form>
          </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>