<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    
    public function index()
    {
        return Game::all();
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $validated = $request->validate([
            'homeTeam' => 'required|string|max:255',
            'awayTeam' => 'required|string|max:255',
            'matchDate' => 'required|date',
        ]);

        $game = Game::create($validated);
        return response()->json($game, 201);
    }

    public function show($id)
    {
        return Game::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);

        $validated = $request->validate([
            'homeTeam' => 'required|string|max:255',
            'awayTeam' => 'required|string|max:255',
            'matchDate' => 'required|date',
        ]);

        $game->update($validated);
        return response()->json($game);
    }

    public function destroy($id)
    {
        Game::destroy($id);
        return response()->json(null, 204);
    }
}
