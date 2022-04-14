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
        return view('projects.index', ['projects' => Project::paginate(5)]);
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
        $request->validate([
            'title'  => 'required|min:4',
            'desc' => 'required|min:14',
            'image' => 'required'
        ]);

        if ($request->hasFile('image' )) {
            $path = $request->file('image')->store('image', ['disk' => 'public']);
            Project::create([
                'title' => $request->title,
                'description' => $request->desc,
                'progress' => $request->input('progress', 0),
                'picture' => $path,
                'active' => 1,
                'language_id' => 1
            ]);
        }
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
        return view('projects.edit', ['project' => $project]);

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
            'title'  => 'required|min:4',
            'desc' => 'required|min:14',
            'image' => 'required'
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
    public function destroy(Project $project)
    {
        $project->languages()->sync([]);
        $project->delete();
        return back();
    }
}
