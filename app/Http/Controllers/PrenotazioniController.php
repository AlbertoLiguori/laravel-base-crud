<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prenotazione;

class PrenotazioniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @ return \Illuminate\Http\Response
     */
    public function index()
    {
        $prenotazioni = Prenotazione::all();

        $columns = [

          'id' => '#',
          'guest_name' => 'Nome Ospite',
          'credit_card' => 'Numero Carta di Credito',
          'room' => 'Stanza',
          'from_date' => 'Dal',
          'to_date' => 'Al',
          'details'=> 'Details'
        ];

        return view('prenotazioni.index', compact(['prenotazioni','columns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @ return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prenotazioni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @ param  \Illuminate\Http\Request  $request
     * @ return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newPrenotazione= new Prenotazione();

      $newPrenotazione->guest_full_name = $request->input('input_full_name');
      $newPrenotazione->guest_credit_card = $request->input('input_card_number');
      $newPrenotazione->room = $request->input('input_room');
      $newPrenotazione->from_date = $request->input('input_from_date');
      $newPrenotazione->to_date = $request->input('input_to_date');
      $newPrenotazione->more_details = $request->input('input_details');;

      $newPrenotazione->save();

      return view('prenotazioni.success');
    }

    /**
     * Display the specified resource.
     *
     * @ param  int  $id
     * @ return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleBooking = Prenotazione::find($id);
        return view('prenotazioni.show', compact('singleBooking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @ param  int  $id
     * @ return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @ param  \Illuminate\Http\Request  $request
     * @ param  int  $id
     * @ return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @ param  int  $id
     * @ return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
