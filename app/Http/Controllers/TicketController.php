<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Provincia;
use App\Models\Ticket;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        $tickets = Ticket::create([
            'nombre'=> $request-> validated('nombre'),
            'descripcion'=> $request-> validated('descripcion'),
            'provincia_id'=> $request-> validated('provincia_id'),
        ]);
        return response()->json($tickets);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $tickets = Ticket::find($id);
        return response()->json($tickets);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $tickets = Ticket::find($id);
        $tickets->nombre = $request->nombre;
        $tickets->descripcion = $request->descripcion;
        $tickets->provincia_id = $request->provincia_id;
        $tickets->save();
        return response()->json($tickets);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $tickets = Ticket::find($id);
        $tickets->delete();

    }

    public function getProvinciaTickets($id)
    {
        $provincia = Provincia::with('tickets')->find($id);
        return response()->json($provincia);
    }
}
