<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaravelConsoles - registrar-consola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
  <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" class="logo" alt="" /></a> <!--To summon a img use asset from blade -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Consolas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('registrar_consola')}}">Registrar consola</a></li>
                      <li><a class="dropdown-item" href="{{route('ver_consolas')}}">Ver consola</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Juegos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('registrar_juego')}}">Registrar juegos</a></li>
                      <li><a class="dropdown-item" href="{{route('ver_juegos')}}">Ver juegos</a></li>
                    </ul>
                  </li>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        <div class="mt-5 row">
            <div class="col-12 col-md-8 col-lg-5 mx-auto"> <!--mx-auto to auto center columns -->
                <div class="card">
                    <div class="card-header bg-transparent">
                        <span>Agregar consola</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name-txt">Nombre</label>
                            <input type="text" id=name-txt class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="brand-select" class="form-label">Marca</label>
                            <select id="brand-select" class="form-select">
                                <option value="Microsoft">Microsoft</option>
                                <option value="Sony">Sony</option>
                                <option value="Nintendo">Nintendo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="year-txt">Año de lanzamiento</label>
                            <input type="number" class="form-control" id=year-txt> <!-- This is for number inputs-->
                        </div>
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button type="button" class="btn btn-outline-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>