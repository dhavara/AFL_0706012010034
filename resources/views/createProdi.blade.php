@extends('layout.mainlayout')

@section('title', 'Add Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf {{--buat kemanan form --}}
            <div class="mb-3">
                <label for="inputProdiName" class="form-label">Name: </label>
                <input type="text" class="form-control" name="name" id="name">

                <label for="inputProdiHeadDepartment" class="form-label">Head Department: </label>
                <input type="text" class="form-control" name="head_department" id="headDepartment">

                <label for="inputProdiTotalSks" class="form-label">Total SKS: </label>
                <input type="text" class="form-control" name="total_sks" id="totalSks">

                <label for="inputProdiTotalStudent" class="form-label">Total Student: </label>
                <input type="text" class="form-control" name="total_student" id="totalStudent">

                <label for="inputProdiDateFounded" class="form-label">Date Founded: </label>
                <input type="date" class="form-control" name="date_founded" id="dateFounded">

                <label for="inputProdiDescription" class="form-label">Description: </label>
                <input type="text" class="form-control" name="description" id="description">

                <br>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
