<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function create() {

        $secondary_objective_options = [
          'War',
          'Peace'
        ];

        return view('games.create', [
            'secondary_objective_options' => $secondary_objective_options
        ]);

    }

    public function show(Game $game) {

        return view('games.show', [
            'game' => $game
        ]);

    }

    public function store(Request $request) {

        //Validate

        $game = new Game();

        $game->army = $request->input('army');
        $game->player = $request->input('player');

        if ($game->save()) {

            return redirect(route('games.view', $game->id))->with('status-success', 'Your game was saved!');

        } else {

            return back()->with('status-failure', 'We could not save your game');

        }

    }

}
