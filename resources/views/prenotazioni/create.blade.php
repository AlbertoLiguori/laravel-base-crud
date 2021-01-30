@extends('layouts.main')



@section('section-1')

      <form class="row g-3" action="{{route('prenotazioni.store')}}" method="post">

              @csrf
              
              <div class="col-md-6">

                    <label for="input_full_name" class="form-label">Full Name:</label>
                    <input name="input_full_name" type="text" class="form-control" id="input_full_name" placeholder="Full Name">

              </div>

              <div class="col-md-6">

                    <label for="input_card_number" class="form-label">Card Number:</label>
                    <input name="input_card_number" type="text" class="form-control" id="input_card_number" placeholder="Credit Card Number">

              </div>

              <div class="col-12">

                    <label for="input_room" class="form-label">Room:</label>
                    <input name="input_room" type="text" class="form-control" id="input_room" placeholder="Room Number">

              </div>

              <div class="col-12">

                    <label for="input_from_date" class="form-label">From:</label>
                    <input name="input_from_date" type="date" class="form-control" id="input_from_date" placeholder="gg/mm/yyyy">

              </div>

              <div class="col-12">

                    <label for="input_to_date" class="form-label">From:</label>
                    <input name="input_to_date" type="date" class="form-control" id="input_to_date" placeholder="gg/mm/yyyy">

              </div>

              <div class="col-md-6">

                    <label for="input_details" class="form-label">Details:</label>
                    <textarea name="input_details" class="form-control" id="input_details" name="name" rows="8" cols="80"></textarea>

              </div>

              <div class="col-12">

                    <button type="submit" class="btn btn-primary"> Create </button>

              </div>

      </form>

@endsection
