<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
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
            ->select('w.id', 'w.title', 'types.name')
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
        $projectType = DB::table('project_types')->get();
        $workspace = DB::table('workspaces')->find($id);
        return view('workspace.update', ['workspace' => $workspace, 'types' => $projectType]);
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
        $request->validate(
            ['projectTypeId' => 'required',
            'title' => 'required']
        );


        Workspace::where('id', $id)
            ->update(
                ['project_type_id' => $request->projectTypeId,
                'title' => $request->title]
            );
        
        return redirect('/workspace');     
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
