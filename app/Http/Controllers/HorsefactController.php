<?php

namespace App\Http\Controllers;

use App\Horsefact;
use Illuminate\Http\Request;

class HorsefactController extends Controller
{
    public function getRandom()
    {
        $horseFact = \App\Horsefact::inRandomOrder()->first();

        if ( ! $horseFact) {
            return 'There are no horsefacts saved.';
        }

        return response([
            'response_type' => 'in_channel',
            'text' => $horseFact->fact,
        ], 200);
    }
    
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
     * @param  \App\Horsefact  $horsefact
     * @return \Illuminate\Http\Response
     */
    public function show(Horsefact $horsefact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horsefact  $horsefact
     * @return \Illuminate\Http\Response
     */
    public function edit(Horsefact $horsefact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horsefact  $horsefact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horsefact $horsefact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horsefact  $horsefact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horsefact $horsefact)
    {
        //
    }
}
