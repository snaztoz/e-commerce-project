<?php

namespace App\Http\Controllers;

use App\Models\Bibliography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BibliographiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bibliographies = DB::table('bibliographies')->get();
        return view('index',['bibliographies' => $bibliographies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('bibliographies')->insert([
            'id' => $request->id,
            'type' => $request->type,
            'title' => $request->title,
            'year' => $request->year,
            'doi' => $request->doi
        ]);
        return redirect('/bibliographies');
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
        $deleteBib = DB::table('bibliographies')->where('id',$id)->delete();

        // DB::table('bibliographies')->where('bibliographies_id,$id')->delete();
        return redirect('/bibliographies');
    }
}
