<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa', [
            'title' => 'Mahasiswa',
            'pagetitle' => 'Mahasiswa',
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createmahasiswa', [
            'title' => 'Mahasiswa',
            'pagetitle' => 'Add Mahasiswa'
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
        $name = Str::lower(Str::substr($request->mahasiswa, 0, 3));

        Mahasiswa::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'religion' => $request->religion,
            'birth_date' => $request->birth_date,
            'birth_city' => $request->birth_city,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'prodi' => $request->prodi,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('mahasiswa.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        return view('detailmahasiswa', [
            'title' => 'Mahasiswa',
            'pagetitle' => 'Detail Mahasiswa',
            'mahasiswa' => Mahasiswa::where('name', $name)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('editmahasiswa', [
            'title' => 'Mahasiswa',
            'pagetitle' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = Str::lower(Str::substr($request->mahasiswa, 0, 3));
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'email' => $request->email,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect(route('mahasiswa.index'));
    }
}
