<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title></title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7e1ec">
    <div class="container">
        <a class="navbar-brand" href="{{route('searchPage')}}">rentaprodigy.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container description text-center">
    <div class="row">
        <div class="col-6 offset-3">
            <img src="/photos/{{$car->image}}.jpg" alt="" class="mt-3 description-img">
        </div>
    </div>

    <div>
        <h5 class="mt-2">Proizvođač: {{$car->manufacturer}}</h5>
        <h5 class="mt-2">Model: {{$car->model}}</h5>
        <h5 class="mt-2">Godina proizvodnje: {{$car->year}}</h5>
        <h5 class="mt-2">Mjenjač: {{$car->transmission}}</h5>
        <h5 class="mt-2">Gorivo: {{$car->fuel}}</h5>
        <h5 class="mt-2">Klasa: {{$car->type}}</h5>
        <h5 class="mt-2">Dostupno od: {{$car->from}} do: {{$car->until}} </h5>

        <div class="offset-md-4 col-md-4">
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modal">
                Napravi rezervaciju
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vaši podaci:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('delete', ['id'=> $car -> id])}}">
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                    <label for="name">Ime i prezime:</label>
                    <input type="text" id="name" class="form-control">
                    <label for="JMBG">JMBG:</label>
                    <input type="text" id="JMBG" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Rezerviši</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
