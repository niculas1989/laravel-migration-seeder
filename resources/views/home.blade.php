<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My Trains</title>
</head>

<body>
    <div class="text-center">
        <h1>Lista Treni in Arrivo</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            @forelse ($trains as $train)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$train['azienda']}}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{$train['stazione_di_partenza']}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$train['stazione_di_arrivo']}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$train['orario_di_partenza']}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$train['orario_di_arrivo']}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$train['codice_treno']}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$train['carrozze']}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center">
                <h1>NON CI SONO TRENI</h1>
            </div>
            @endforelse
        </div>
    </div>
</body>

</html>