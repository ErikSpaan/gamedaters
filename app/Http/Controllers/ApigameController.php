<?php

namespace App\Http\Controllers;

use App\Apigame;
use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class apigameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::where('category', '1')->get();
        dd($games);
        return view('/apigame',compact('games'));
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
     * @param  \App\Apigame  $apigame
     * @return \Illuminate\Http\Response
     */
    public function show(Apigame $apigame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apigame  $apigame
     * @return \Illuminate\Http\Response
     */
    public function edit(Apigame $apigame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apigame  $apigame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apigame $apigame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apigame  $apigame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apigame $apigame)
    {
        //
    }
}
