@extends('layouts.main')

@section('section-1')

<table class="table">
  <thead>

          <tr>

            @foreach ($columns as $columnValue)

              <th scope="col">{{$columnValue}}</th>

            @endforeach

          </tr>

  </thead>

  <tbody>

    @foreach ($prenotazioni as $prenotazione)

      <tr>

          <th scope="row">{{$prenotazione['id']}}</th>
          <td>{{$prenotazione['guest_full_name']}}</td>
          <td>{{$prenotazione['guest_credit_card']}}</td>
          <td>{{$prenotazione['room']}}</td>
          <td>{{$prenotazione['from_date']}}</td>
          <td>{{$prenotazione['to_date']}}</td>
          <td> <a href="{{ route('prenotazioni.show', $prenotazione['id']) }}"> Vai </a> </td>
          <td> <a href="{{ route('prenotazioni.edit', $prenotazione['id']) }}"> Aggiorna </a> </td>

      </tr>

    @endforeach

  </tbody>

</table>




@endsection
