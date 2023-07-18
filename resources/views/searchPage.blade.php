<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7e1ec">
            <div class="container">
            <a class="navbar-brand" href="{{route('searchPage')}}">rentaprodigy.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>

        <div class="container search">
            <form action="{{route('searchPage')}}" class="form-horizontal" method="GET">
                <div class="row" style="padding-top:2em">
                    <div class="col-1">
                        <label for="manufacturer">Proizvođač:</label>
                    </div>
                    <div class="col-2">
                        <select name="manufacturer" id="manufacturer" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-1 offset-1">
                        <label for="model">Model:</label>
                    </div>
                    <div class="col-2">
                        <select name="model" id="model" class="form-control" disabled>
                            <option value=""></option>

                        </select>
                    </div>

                    <div class="col-2 offset-1">
                        <label for="year">Godina proizvodnje:</label>
                    </div>
                    <div class="col-2">
                        <select name="year" id="year" class="form-control">
                            <option value=""></option>
                            <!-- Dinamički kreirano u JS fajlu -->
                        </select>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-1">
                        <label for="transmission"> Mjenjač:  </label>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" id="automatic" name="automatic" value="automatik">
                    </div>
                    <div class="col-1" style="margin-left:-5em">
                        <label for="automatic">Automatik</label>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" id="manual" name="manual" value="manuelni">
                    </div>
                    <div class="col-1" style="margin-left:-5em">
                        <label for="manual">Manuelni</label>
                    </div>

                    <div class="col-1" style="margin-left:3em">
                        <label for="fuel">Gorivo:</label>
                    </div>
                    <div class="col-2">
                        <select name="fuel" id="fuel" class="form-control">
                            <option value=""></option>
                            <option value="Benzin">Benzin</option>
                            <option value="Dizel">Dizel</option>
                            <option value="Hibrid">Hibrid</option>
                            <option value="Električno">Električno</option>
                        </select>
                    </div>

                    <div class="col-1 offset-2">
                        <label for="type">Klasa:</label>
                    </div>
                    <div class="col-2">
                        <select name="type" id="type" class="form-control">
                            <option value=""></option>
                            <option value="Ekonomična">Ekonomična</option>
                            <option value="Srednja">Srednja</option>
                            <option value="Luksuzna">Luksuzna</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-1">
                        <label for="date">Potrebno: (od-do)</label>
                    </div>
                    <div class="col-2">
                        <input type="date" id="date" name="from" class="form-control">
                    </div>
                    <div class="col-2">
                        <input type="date" id="date" name="until" class="form-control">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn w-100 customButton"> Pretraži </button>
                    </div>
                </div>
                <div class="row mt-3"></div>
            </form>
        </div>

        <div class="container mt-3">
            <div class="row">
                @foreach($cars as $car)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="/photos/{{$car -> image}}.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$car -> manufacturer}} {{$car -> model}} </h5>
                            <p class="card-text">Godište: {{$car -> year}} <br> Gorivo: {{$car -> fuel}} <br> Mjenjač: {{$car -> transmission}}</p>
                            <a href="{{route('description', ['id' => $car -> id])}}" class="btn btn-primary customButton">Dodatni podaci</a>
                        </div>
                    </div>
                </div>
                    @endforeach



            </div>
        </div>

</body>
<script src="/js/script.js"></script>
</html>
