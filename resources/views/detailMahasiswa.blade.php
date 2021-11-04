@extends('layout.mainlayout')

@section('title','Detail Mahasiswa')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-black rounded">
        <h1>{{ $mahasiswa['mahasiswa'] }}</h1>
        <p><b>Name: </b>{{ $mahasiswa['name'] }}</p>
        <p><b>Gender: </b>{{ $mahasiswa['gender'] }}</p>
        <p><b>Email: </b>{{ $mahasiswa['email'] }}</p>
        <p><b>Religion: </b>{{ $mahasiswa['religion'] }}</p>
        <p><b>Birth City: </b>{{ $mahasiswa['birth_date'] }}</p>
        <p><b>Birth Date: </b>{{ $mahasiswa['birth_city'] }}</p>
        <p><b>City: </b>{{ $mahasiswa['city'] }}</p>
        <p><b>Telephone: </b>{{ $mahasiswa['telephone'] }}</p>
        <p><b>Prodi: </b>{{ $mahasiswa['prodi'] }}</p>
    </div>
@endsection