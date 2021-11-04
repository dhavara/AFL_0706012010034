@extends('layout.mainlayout')

@section('title', 'Mahasiswa')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="container">
        <br>
        <div class="container"><a href="{{ route('mahasiswa.create') }}"><button type="submit"
                    class="btn btn-warning mb-2">Add Mahasiswa</button></a></div>
        <br>
        <table class="table table-striped">
            <tr>
                <th>NO</th>
                <th>NAME
                <th>GENDER</th>
                <th>PRODI</th>
                <th>ACTIONS</th>
            </tr>
            @foreach ($mahasiswas as $mhs)
                @php($i = $loop->index)
                @php($i++)

                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $mhs['name'] }}</td>
                    <td>{{ $mhs['gender'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>

                    <td>
                        <div class="d-grid d-md-flex">
                            <a href="{{ route('mahasiswa.show', $mhs['name']) }}"><button type="button"
                                    class="btn btn-primary me-md-2">Show</button></a>

                            <a href="{{ route('mahasiswa.edit', $mhs['id']) }}"><button type="button"
                                    class="btn btn-info me-md-2">Edit</button></a>

                            <form action="{{ route('mahasiswa.destroy', $mhs['id']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach
        </table>
    </div>
@endsection
