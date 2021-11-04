@extends('layout.mainlayout')

@section('title', 'Add Mahasiswa')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputMahasiswaName" class="form-label">Name: </label>
                <input type="text" class="form-control" name="name" id="name">

                <label for="inputMahasiswaGender" class="form-label">Gender: </label>
                <input type="text" class="form-control" name="gender" id="gender">

                <label for="inputMahasiswaEmail" class="form-label">Email: </label>
                <input type="email" class="form-control" name="email" id="email">

                <label for="inputMahasiswaReligion" class="form-label">Religion: </label>
                <input type="text" class="form-control" name="religion" id="religion">

                <label for="inputMahasiswaBirthDate" class="form-label">Birth Date: </label>
                <input type="date" class="form-control" name="birth_date" id="birth_date">

                <label for="inputMahasiswaBirthCity" class="form-label">Birth City: </label>
                <input type="text" class="form-control" name="birth_city" id="birth_city">

                <label for="inputMahasiswaCity" class="form-label">City: </label>
                <input type="text" class="form-control" name="city" id="city">

                <label for="inputMahasiswaProdi" class="form-label">Telephone: </label>
                <input type="number" class="form-control" name="telephone" id="telephone">

                <label for="inputMahasiswaProdi" class="form-label">Prodi: </label>
                <input type="text" class="form-control" name="prodi" id="prodi">

                <label for="inputMahasiswaImage" class="form-label">Image: </label>
                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                <br>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
