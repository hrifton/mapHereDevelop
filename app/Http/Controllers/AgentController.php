<?php

namespace App\Http\Controllers;

use App\agent;
use Illuminate\Http\Request;
use App\positionAgent;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return agent::all();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(agent $agent)
    {
        return  Agent::where('agents.id','=',$agent['id'])->join('position_agents as p','agents.id','=','p.agent_id')
        ->join('statuts as s','agents.statut_id','=','s.id')
        ->select('name','firstname','s.color','s.statut','p.lat','p.long','p.agent_id') ->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(agent $agent)
    {
        //
    }
}
