<?php

namespace App\Http\Controllers;

use App\positionCar;
use Illuminate\Http\Request;

class PositionCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\positionCar  $positionCar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {//return 5 element
     
        return positionCar::where('car_id','=',$id)->limit(5)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\positionCar  $positionCar
     * @return \Illuminate\Http\Response
     */
    public function edit(positionCar $positionCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\positionCar  $positionCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, positionCar $positionCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\positionCar  $positionCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(positionCar $positionCar)
    {
        //
    }
}
