<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return view('team.view',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email:rfc,dns|unique:teams',
            'tele' => 'required|max:10',
            'route' => 'required',
            'joined_date' => 'required',
            'comment' => 'required|max:200'
        ]);

        if($validated)
        {
            Team::create($request->all());
        }

        return redirect()->route('view-team.show')->with('status', 'Team member added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            DB::table('teams')
                    ->where('id', $request->id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'tele' => $request->tele,
                        'joined_date' => $request->joined_date,
                        'route' => $request->route,
                        'comment' => $request->comment
                    ]);

        return redirect()->route('view-team.show')->with('update', 'Team member details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
