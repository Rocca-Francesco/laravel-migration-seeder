<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}}</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
  <div class="container my-4">
    <table class="table table-dark table-striped">
  <thead>
    <tr class="text-warning">
      <th scope="col">AZIENDA</th>
      <th scope="col">CODICE TRENO</th>
      <th scope="col">STAZIONE DI PARTENZA</th>
      <th scope="col">ORARIO DI PARTENZA</th>
      <th scope="col">STATO</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($trains as $train)
    <tr>
      <td>{{$train->azienda}}</td>
      <td>{{$train->codice_treno}}</td>
      <td>{{$train->stazione_partenza}}</td>
      <td>{{$train->orario_di_partenza}}</td>
      <td>{{$train->stato}}</td>
    </tr>
    @empty
      <td>NESSUN DATO</td>
      <td>NESSUN DATO</td>
      <td>NESSUN DATO</td>
      <td>NESSUN DATO</td>
      <td>NESSUN DATO</td>
    @endforelse
  </tbody>
</table>
  </div>
</body>
</html>