<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusRequest;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::latest('id')->paginate(10);

        return view('backend.buses.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusRequest $request)
    {
        Bus::create($request->validated());

        return back(Response::HTTP_CREATED)->with('success', 'Bus created successfully');
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
        $bus = Bus::find($id);


        return view('backend.buses.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBusRequest $request, string $id)
    {
        Bus::find($id)->update($request->validated());

        return back()->with('success', 'Bus updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bus::find($id)->delete();

        return back()->with('success', 'Bus has been deleted');
    }
}
