@extends('layouts.main')



@section('section-1')

      <form class="row g-3" action="{{route('prenotazioni.update', $prenotazione['id'])}}" method="post">

              @csrf
              @method('PUT')

              <div class="col-md-6">

                    <label for="input_full_name" class="form-label">Full Name:</label>
                    <input name="input_full_name" type="text" class="form-control" id="input_full_name" value="{{$prenotazione['guest_full_name']}}" >

                    @error('input_full_name')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-md-6">

                    <label for="input_card_number" class="form-label">Card Number:</label>
                    <input name="input_card_number" type="text" class="form-control" id="input_card_number" value="{{$prenotazione['guest_credit_card']}}">

                    @error('input_card_number')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-12">

                    <label for="input_room" class="form-label">Room:</label>
                    <input name="input_room" type="text" class="form-control" id="input_room" value="{{$prenotazione['room']}}">

                    @error('input_room')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-12">

                    <label for="input_from_date" class="form-label">From:</label>
                    <input name="input_from_date" type="date" class="form-control" id="input_from_date" value="{{$prenotazione['from_date']}}">
                    @error('input_from_date')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-12">

                    <label for="input_to_date" class="form-label">From:</label>
                    <input name="input_to_date" type="date" class="form-control" id="input_to_date" value="{{$prenotazione['to_date']}}">

                    @error('input_to_date')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-md-6">

                    <label for="input_details" class="form-label">Details:</label>
                    <textarea name="input_details" class="form-control" id="input_details" name="name" rows="8" cols="80">{{ $prenotazione['more_details'] }}</textarea>

                    @error('input_details')

                      <div>
                            {{$message}}
                      </div>

                    @enderror

              </div>

              <div class="col-12">

                    <button type="submit" class="btn btn-primary"> Update </button>

              </div>

      </form>

@endsection
