<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workspace = DB::table('workspaces as w')
            ->join('project_types as types', 'w.project_type_id', '=', 'types.id')
            ->get();
        return view('workspace.index', ['workspace' => $workspace]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectType = DB::table('project_types')->get();
        return view('workspace.create', ['types' => $projectType]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $idUser = DB::table('users') //delete once Auth::user()->id can be implemented
            ->where('users.id', 1)
            ->value('users.id');

        $request->validate(
            ['projectTypeId' => 'required',
            'title' => 'required']
        );

        DB::table('workspaces')->insert(
            ['project_type_id' => $request->projectTypeId,
            'user_id' => $idUser, //change to Auth::user()->id
            'title' => $request->title]
        );

        return redirect('/workspace');
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
