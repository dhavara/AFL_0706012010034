@extends('layout.mainlayout')

@section('title', 'Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
<table class="table table-striped">
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>TOTAL STUDENT</th>
        <th>DATE FOUNDED</th>
        <th>ACTIONS</th>
    </tr>
</table>
@endsection
