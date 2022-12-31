<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificate = Certificate::all();

        return view('certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate.create');
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
            'year' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg|max:10000',
            'description' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $image->move(public_path('images/certificate'), $imageName);
        $imagePath = 'images/certificate/' . $imageName;

        $certificate = new Certificate([
            'year' => $request->get('year'),
            'image' => $imagePath,
            'description' => $request->get('description')
        ]);
        $certificate->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificate = Certificate::find($id);

        return response()->json($certificate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate = Certificate::find($id);

        return view('certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:10000',
            'description' => 'nullable',
        ]);

        $certificate = Certificate::find($id);
        $certificate->year = $request->get('year');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $image->move(public_path('images/certificate'), $imageName);
            $imagePath = 'images/certificate/' . $imageName;

            $certificate->image = $imagePath;
        }
        $certificate->description = $request->get('description');

        $certificate->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();

        return redirect()->back();
    }
}
