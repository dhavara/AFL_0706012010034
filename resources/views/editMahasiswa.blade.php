@extends('layout.mainlayout')

@section('title', 'Edit Mahasiswa')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form action="{{ route('mahasiswa.update') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="mb-3">
                <label for="inputMahasiswaEmail" class="form-label">Email: </label>
                <input type="email" class="form-control" name="email" id="email">

                <label for="inputMahasiswaCity" class="form-label">City: </label>
                <input type="text" class="form-control" name="city" id="city">

                <label for="inputMahasiswaProdi" class="form-label">Telephone: </label>
                <input type="number" class="form-control" name="telephone" id="telephone">
                
                <br>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection