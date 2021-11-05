@extends('layout.mainlayout')

@section('title', 'Detail Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-black rounded">
        <h1>{{ $prodi['name'] }} Details</h1>
        <br>
        <p><b>Name: </b>{{ $prodi['name'] }}</p>
        <p><b>Head Department: </b>{{ $prodi['head_department'] }}</p>
        <p><b>Total SKS: </b>{{ $prodi['total_sks'] }}</p>
        <p><b>Total Student: </b>{{ $prodi['total_student'] }}</p>
        <p><b>Date Founded: </b>{{ $prodi['date_founded'] }}</p>
        <p><b>Description: </b>{{ $prodi['description'] }}</p>
    </div>
    <br>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>EMAIL</th>
        </tr>
        @foreach ($prodi->mahasiswas as $mhs)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $mhs['name'] }}</td>
                <td>{{ $mhs['gender'] }}</td>
                <td>{{ $mhs['email'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
