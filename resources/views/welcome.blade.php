@extends('layouts.app')

@section('main-content')

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
        @foreach($trains as $train)
          <tr>
            <td>{{ $train->agency }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>
                {{ $train->on_time ? 'In orario' : 'In ritardo' }}
            </td>
            <td>
                {{ $train->canceled ? 'Cancellato' : ''}}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>

@endsection