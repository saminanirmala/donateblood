<?php

namespace App\Http\Controllers\donor;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Donor;
use Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function __construct()
  {
    $this->donor = new Donor;
  }

    public function register()
    {
      $validator=$this->donor->donorValidation(Input::all());
      if($validator->fails())return Redirect::back()->withErrors($validator)->withInput(Input::all());
      $this->donor->add(Input::all());
      return redirect('/donor')->with('flash_message', ' You are now registered in our system.');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
