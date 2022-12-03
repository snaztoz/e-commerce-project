<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\ProjectType;
use App\Models\Workspace;

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
            ->join('project_types as t', 'w.project_type_id', '=', 't.id')
            ->where('w.user_id', '=', Auth::id())
            ->select('w.id', 'w.title', 't.name')
            ->get();

        return view('workspace.index', [
            'workspace' => $workspace,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectType = ProjectType::all();

        return view('workspace.create', [
            'types' => $projectType,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'projectTypeId' => 'required',
            'title' => 'required',
        ]);

        DB::table('workspaces')->insert([
            'project_type_id' => $validated['projectTypeId'],
            'user_id' => $request->user()->id,
            'title' => $validated['title'],
        ]);

        return redirect()->route('workspace.index');
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
        $projectTypes = ProjectType::all();
        $workspace = Workspace::find($id);

        return view('workspace.update', [
            'workspace' => $workspace,
            'types' => $projectTypes,
        ]);
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
        $validated = $request->validate([
            'projectTypeId' => 'required',
            'title' => 'required',
        ]);

        Workspace::where('id', $id)
            ->update([
                'project_type_id' => $validated['projectTypeId'],
                'title' => $validated['title'],
            ]);

        return redirect()->route('workspace.index');
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
