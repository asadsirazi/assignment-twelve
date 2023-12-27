<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(string $trip)
    {
        $trip_id = decrypt($trip);
        $trip = Trip::with( 'bus', 'tickets')->findOrFail($trip_id);
        return view('front.tickets.create', compact('trip'));
    }


    public function store(Request $request)
    {

        dd($request->input());
    }
}
