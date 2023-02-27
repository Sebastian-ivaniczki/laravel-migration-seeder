<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <div class="bg-warning">
                    <h1 class="text-center text-primary border border-warning p-3">Orari Treni Partenze/Arrivi</h1>
                </div>
                <table class="table table-warning table-striped">
                    <thead>
                        <tr>
                            <th>Azienda</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario di partenza</th>
                            <th>Orario di arrivo</th>
                            <th>Codice treno</th>
                            <th>Numero carrozze</th>
                            <th>Treno in orario</th>
                            <th>Treno cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->wagon_length }}</td>
                                <td>{{ $train->in_time }}</td>
                                <td>{{ $train->cancelled }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
