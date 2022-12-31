<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();

        return view('skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
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
            'skill' => 'required',
            'skill_description' => 'required',
            'icon' => 'required|image|mimes:png,jpg,jpeg,svg|max:5000'
        ]);

        $icon = $request->file('icon');
        $iconName = time() . '.' . $icon->getClientOriginalExtension();

        $icon->move(public_path('images/skill'), $iconName);
        $iconPath = 'images/skill/' . $iconName;

        $item = new Skill([
            'skill' => $request->get('skill'),
            'skill_description' => $request->get('skill_description'),
            'icon' => $iconPath
        ]);
        $item->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::find($id);

        return response()->json($skill);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'skill' => 'required',
            'skill_description' => 'required',
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:5000'
        ]);

        $item = Skill::find($id);
        $item->skill = $request->get('skill');
        $item->skill_description = $request->get('skill_description');

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '.' . $icon->extension();

            $icon->move(public_path('images/skill'), $iconName);
            $iconPath = 'images/skill/' . $iconName;

            $item->icon = $iconPath;
        }

        $item->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back();
    }
}
