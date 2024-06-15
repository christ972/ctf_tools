<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <title>@yield('title-page')</title>

  </head>

  <body>
     
    {{-- header --}}
    <header>

        {{-- jumbotron --}}
        <div class="jumbotron jumbotron-fluid">

            {{-- container --}}
            <div class="container">

                <h1 class="display-4">Gestionnaire De Bibliotheque</h1>
                <p class="lead">Ici trouvez les livres de tout genre : Roman litteraire, Roman Scientifique,etc</p>
                <hr class="my-4">
                <p>Visitez notre site et voir les tendances actuelles</p>
                <a class="btn btn-primary btn-lg col-6" href="{{route('register')}}" role="button">S'inscrire</a>
                <a class="btn btn-primary btn-lg col-5" href="{{route('login')}}" role="button">Se connecter</a>


            </div>
            {{-- /container --}}

        </div>
        {{-- /jumbotron --}}

    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>

        {{-- container --}}
        <div class="container">

            @yield('welcome')

        </div>
        {{-- /container --}}

        @include('layouts.default.components._card')


    </main>
    {{-- /main --}}

    @include('layouts.default._footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>

</html>
