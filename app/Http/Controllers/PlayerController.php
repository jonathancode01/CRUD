<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();

        return response()->json($player);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validade([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);
        $player = Player::create($ValidatedData);
        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return response()->json(player);
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
        $ValidatedData = $request->validade([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);
        $player-> update($ValidatedData);

        return response()->json($player, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player -> delete();

        return response()->json(null, 204);
    }
}
