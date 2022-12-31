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
        $project = Project::all();

        return view('project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg|max:10000',
            'link' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $image->move(public_path('images/project'), $imageName);
        $imagePath = 'images/project/' . $imageName;

        $project = new Project([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'link' => $request->get('link'),
        ]);
        $project->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:10000',
            'link' => 'nullable',
        ]);

        $project = Project::find($id);
        $project->title = $request->get('title');
        $project->description = $request->get('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $image->move(public_path('images/project'), $imageName);
            $imagePath = 'images/project/' . $imageName;

            $project->image = $imagePath;
        }

        $project->link = $request->get('link');
        $project->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->back();
    }
}
