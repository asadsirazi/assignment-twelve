<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRouteRequest;
use App\Models\Location;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::latest('id')->with('departureLocation', 'destinationLocation')->paginate(10);


        return view('backend.routes.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::get();
        return view('backend.routes.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRouteRequest $request)
    {
        Route::create($request->validated());

        return back()->with('success', 'Route created successfully');
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

        $route = Route::find($id);
        $locations = Location::get();

        return view('backend.routes.edit', compact('route', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRouteRequest $request, string $id)
    {
        Route::find($id)->update($request->validated());

        return back()->with('success', 'Route updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Route::find($id)->delete();
        return back()->with('success', 'Route has been deleted');
    }
}
