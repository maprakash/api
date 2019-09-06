<?php

namespace App\Http\Controllers;
use App\genre;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class genresController extends Controller
{
    public function __construct()
    {
       $this->middleware('jwt', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(genre::get(), 200);
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
     * @param  \App\testmodel  $testmodel
     * @return \Illuminate\Http\Response
     */
    public function show(testmodel $testmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testmodel  $testmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(testmodel $testmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testmodel  $testmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testmodel $testmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testmodel  $testmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(testmodel $testmodel)
    {
        //
    }
}
