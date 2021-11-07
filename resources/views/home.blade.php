@extends('layout.mainlayout')

@section('title', 'Home')

@section('page_title')
    <h1 class="home">{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <h5 class="home">This is a homepage</h5>
    <h5 class="home">You can add Mahasiswa or Prodi below</h5>
    <div class="container d-flex justify-content-center">
        <a class="home btn btn-success mb-2 me-2" href="{{ route('mahasiswa.create') }}">
            + Add Mahasiswa
        </a>
        <a class="home btn btn-success mb-2" href="{{ route('prodi.create') }}">
             + Add Prodi
        </a>
    </div>
@endsection
