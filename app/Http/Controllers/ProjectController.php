<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', ['projects' => Project::where('active',1)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.adding', ['projects' => Project::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('image', ['disk'=>'public']);
        Project::create([
            'title' => $request->title,
            'description' => $request->desc,
            'progress' => $request->progress,
            'picture' => $path,
            'active'  => 1,

         ]);
         return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // validatie
        $request->validate([
           'title'  => 'required|min:4'
        ]);
        // opslaan
        $path = $request->file('image')->store('image', ['disk'=>'public']);
        $project->title = $request->input('title');
        $project->description = $request->input('desc');
        $project->picture = $path;
        $project->progress = $request->input('progress');


        $project->save();
        // terugsturen ergens heen (projecten denk ik)
        return redirect()->view('projects.index', ['projects' => Project::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::find($id)->delete();
        return back();
    }
}
