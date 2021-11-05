<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodi', [
            'title' => 'Prodi',
            'pagetitle' => 'Prodi',
            'prodi' => Prodi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createprodi', [
            'title' => 'Prodi',
            'pagetitle' => 'Add Prodi'
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
        $name = Str::lower(Str::substr($request->name, 0, 3));
        Prodi::create([
            'name' => $request->name,
            'head_department' => $request->head_department,
            'total_sks' => $request->total_sks,
            'total_student' => $request->total_student,
            'date_founded' => $request->date_founded,
            'description' => $request->description,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        return view('detailprodi', [
            'title' => 'Prodi',
            'pagetitle' => 'Detail Prodi',
            'prodi' => Prodi::where('name', $name)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $prodi = Prodi::findOrFail($name);
        return view('editprodi', [
            'title' => 'Prodi',
            'pagetitle' => 'Edit Prodi',
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $prodi = Prodi::findOrFail($name);
        $prodi->update([
            'head_department' => $request->head_department,
            'total_student' => $request->total_student,
            'description' => $request->description,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $prodi = Prodi::findOrFail($code);
        $prodi->delete();
        return redirect(route('prodi.index'));
    }
}
