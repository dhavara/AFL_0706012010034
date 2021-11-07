@extends('layout.mainlayout')

@section('title', 'Home')

@section('page_title')
    <h1 class="home">{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <h5 class="home">This is a homepage</h5>
    <h5 class="home">You can add Mahasiswa or Prodi below</h5>
    <div class="container">
        <a class="home" href="{{ route('mahasiswa.create') }}">
            <button type="submit" class="btn btn-success mb-2"> + Add Mahasiswa</button>
        </a>
        <a class="home" href="{{ route('prodi.create') }}">
            <button type="submit" class="btn btn-success mb-2"> + Add Prodi</button>
        </a>
    </div>
@endsection
