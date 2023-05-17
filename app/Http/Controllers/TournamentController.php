<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $admin = false;

        $tournaments = Tournament::all();
        
        if ($user != null) {
            if ($user->isAdmin) {
                $admin = true;
            }
        }
        return view('tournaments', ['tournaments' => $tournaments, 'admin' => $admin]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addTournament');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the filename of image uploaded
        $filename = $request->img->getClientOriginalName();
        // store in public folder
        $request->img->move(public_path('img'), $filename);

        $tournament = Tournament::create([
            'tournament_name' => $request['tournament_name'],
            'game' => $request['game'],
            'date' => $request['date'],
            'location' => $request['location'],
            'img' => $filename,
            'user_id' => Auth::id()
        ]);
        return redirect('tournaments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournament::find($id);
        return view('editTournament', ['tournament' => $tournament]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tournament = Tournament::find($id);
        if ($request->hasFile('img')) {
            $filename = $request->photo->getClientOriginalName();
            $request->img->move(public_path('img'), $filename);
        } else {
            $filename = $tournament ->img;
        }
        $tournament ->tournament_name = $request->tournament_name;
        $tournament->game = $request->game;
        $tournament->date = $request->date;
        $tournament->location = $request->location;
        $tournament->img = $filename;
        $tournament->save();
        return redirect("tournaments");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $tournament = Tournament::find($id);


        $tournament->delete();
        return redirect("tournaments");
    }

}
