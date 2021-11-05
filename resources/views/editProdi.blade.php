@extends('layout.mainlayout')

@section('title', 'Edit Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="mb-3">
                <label for="inputProdiHeadDepartment" class="form-label">Head Department: </label>
                <input type="text" class="form-control" name="head_department" id="headDepartment">

                <label for="inputProdiTotalStudent" class="form-label">Total Student: </label>
                <input type="number" class="form-control" name="total_student" id="totalStudent">

                <label for="inputProdiDescription" class="form-label">Description: </label>
                <input type="text" class="form-control" name="description" id="description">
                
                <br>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
