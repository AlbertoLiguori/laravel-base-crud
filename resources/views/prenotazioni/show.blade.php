@extends('layouts.main')

@section('section-1')


<div class="card" style="width: 18rem;">

      <div class="card-body">
        <h5 class="card-title"> {{ $singleBooking['guest_full_name'] }} </h5>
        <h6 class="card-subtitle mb-2 text-muted"> Numero Carta: </h6>
        <h6 class="card-subtitle mb-2 text-muted"> {{ $singleBooking['guest_credit_card'] }} </h6>
        <h6>Stanza numero: {{ $singleBooking['room'] }} </h6>
        <h6>Prenotazione </h6>
        <h6>Dal :  {{ $singleBooking['from_date'] }} </h6>
        <h6>Al : {{ $singleBooking['to_date'] }} </h6>
        <p class="card-text"> {{ $singleBooking['more_details'] }} </p>


        <a href=" {{ route('prenotazioni.index') }} " class="card-link"> Torna all'elenco </a>
      </div>

</div>

@endsection
