<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CupController extends Controller
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
    public function create(Request $request )
    {
        //
        //dd(json_decode($request->getContent(), true));
        //$name = $request->input('user.name');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //echo $request;
       //echo 
      // return $request->json();
        //
      //  dd('1234567890');
      //  $name = $request->input('cupname');
      //  return  $name;  //$request->json()->all();//json_decode($request->getContent(), true);
       $input = $request->all();
       $cupname = $request->input('cupname');
       $place = $request->input('place');
       $creator = $request->input('creator');
       $junior = $request->input('junior');

        dd(
            $input,
            $cupname,
            $place,
            $creator,
            $junior 
        //$request->json()->get('email') //,
       // $request->json()->all()
       );
      
      //return "done done done done";
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
