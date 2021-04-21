<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Naissance;
use Illuminate\View\View;

class NaissanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Naissances=Naissance::all();
        return view('welcome',['naissances'=>$Naissances,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome',['layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request->input('sexe'));
        $naissance=new Naissance();
        $naissance->nom=$request->input('nom');
        $naissance->postnom=$request->input('postnom');
        $naissance->prenom=$request->input('prenom');
        $naissance->sexe=$request->input('sexe');
        $naissance->lieu=$request->input('lieu');
        $naissance->dateN=$request->input('dateN');
        $naissance->prenom_pere=$request->input('prenom_pere');  
        $naissance->date_pere=$request->input('date_pere');
        $naissance->lieu_pere=$request->input('lieu_pere');
        $naissance->profession_pere=$request->input('profession_pere');
        $naissance->domicile_pere=$request->input('domicile_pere');
        $naissance->prenom_mere=$request->input('prenom_mere');  
        $naissance->date_mere=$request->input('date_mere');
        $naissance->lieu_mere=$request->input('lieu_mere');
        $naissance->profession_mere=$request->input('profession_mere');
        $naissance->domicile_mere=$request->input('domicile_mere');
        $naissance->tiers_declarant=$request->input('tiers_declarant'); 
        $naissance->evenements_relatifs=$request->input('evenements_relatifs');

        $naissance->save();
        return redirect('/');
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
