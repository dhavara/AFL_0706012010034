@extends('layout.mainlayout')

@section('title','Home')

@section('page_title')
<h1 class="home">{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <h5 class="home">This is a homepage</h5>
@endsection