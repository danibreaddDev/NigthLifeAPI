<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResponse
    {
        // GET ALL LOCATIONS
        $clubs = Club::all();
        return response()->json($clubs,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResponse
    {
        // GET ONE LOCATION
        $club = Club::findOrFail($id)->with("events")->first();
        return response()->json($club,200);
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
    /*public function findByName(string $name): JsonResponse
    {
        $club = Club::where('club_name',$name)->with("events")->first();
        return response()->json($club,200);
    }*/

}
