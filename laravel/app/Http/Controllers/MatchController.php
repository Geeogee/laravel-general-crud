<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function home() {

        $matches = Match::all();

        return view('pages.home', compact('matches'));
    }

    public function show($id) {

        $match = Match::findOrFail($id);

        return view('pages.show', compact('match'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $validated = $request -> validate([
            'team1' => 'required|string',
            'team2' => 'required|string',
            'point1' => 'required|integer',
            'point2' => 'required|integer',
            'result' => 'required|boolean'
        ]);

        $match = Match::create($validated);

        return redirect() -> route('show', $match -> id);
    }

    public function edit($id) {

        $match = Match::findOrFail($id);

        return view('pages.update', compact('match'));
    }

    public function update(Request $request, $id) {

        $validated = $request -> validate([
            'team1' => 'required|string',
            'team2' => 'required|string',
            'point1' => 'required|integer',
            'point2' => 'required|integer',
            'result' => 'required|boolean'
        ]);

        $match = Match::findOrFail($id);
        $match -> update($validated);

        return redirect() -> route('show', $match -> id);
    }

    public function delete($id) {

        $match = Match::findOrFail($id);
        $match -> delete();

        return redirect() -> route('home');
    }
}
