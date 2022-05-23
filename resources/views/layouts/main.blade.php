<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion_person</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img src="{{ asset('Images/hcr1.png') }}" style="max-width:80px" alt="">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " style="color:white;" aria-current="page" href="{{url('/') }}">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " style="color:white;" aria-current="page" href="{{route('formulaire') }}">FORMULAIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('liste') }}" style="color:white;">LISTE</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('contenu')
</body>

</html>