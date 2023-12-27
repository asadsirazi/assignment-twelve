<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $locations = Location::get();

        return view('front.index', compact('locations'));
    }

    public function search(Request $request)
    {
        $origin = $request->origin;
        $destination = $request->destination;
        $date = $request->date;

        $trip = Trip::query();

        if($origin) {
            $trip->where('departure_location_id', '=', $origin);
        }

        if($destination) {
            $trip->where('destination_location_id', '=', $destination);
        }

        $results = $trip->orderByDesc('created_at')->paginate(10)->withQueryString();

        return view('front.search-results', compact('results'));
    }
}
