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


    public function updateGoals(Request $request, $id)
    {
        $validated = $request->validate([
            'home_goals' => 'required|integer|min:0',
            'away_goals' => 'required|integer|min:0',
        ]);

        $game = Game::findOrFail($id);
        $game->home_goals = $validated['home_goals'];
        $game->away_goals = $validated['away_goals'];
        $game->save();

        return response()->json($game);
    }


    public function addYellowCard(Request $request, $id)
    {
        $validated = $request->validate([
            'home_yellow_cards' => 'required|integer|min:0',
            'away_yellow_cards' => 'required|integer|min:0',
        ]);

        $game = Game::findOrFail($id);
        $game->home_yellow_cards += $validated['home_yellow_cards'];
        $game->away_yellow_cards += $validated['away_yellow_cards'];
        $game->save();

        return response()->json($game);
    }


    public function addRedCard(Request $request, $id)
    {
        $validated = $request->validate([
            'home_red_cards' => 'required|integer|min:0',
            'away_red_cards' => 'required|integer|min:0',
        ]);

        $game = Game::findOrFail($id);
        $game->home_red_cards += $validated['home_red_cards'];
        $game->away_red_cards += $validated['away_red_cards'];
        $game->save();

        return response()->json($game);
    }


    public function addExtraTime(Request $request, $id)
    {
        $validated = $request->validate([
            'extra_time' => 'required|integer|min:0',
        ]);

        $game = Game::findOrFail($id);
        $game->extra_time = $validated['extra_time'];
        $game->save();

        return response()->json($game);
    }
}
