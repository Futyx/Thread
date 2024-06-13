<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Participant;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets= Ticket::all();
        return view('ticket.list', ['tickets'=> $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      
        $findTicket = Ticket::where('name', $request->department)->first();
        
        $user= auth()->user();
        $participant = new Participant;
        $participant->user_id = $user->id;
        $participant->save();

        echo 'dear' . ' ' . $user->name . ' ' . 'welcom to the ' . ' ' . $findTicket->name . ' ' . 'department :)';

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
