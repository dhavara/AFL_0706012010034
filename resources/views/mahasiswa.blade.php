@extends('layout.mainlayout')

@section('title', 'Mahasiswa')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="container">
        <br>
        <div class="container"><a href="{{ route('mahasiswa.create') }}"><button type="submit"
                    class="btn btn-success mb-2"> + Add Mahasiswa</button></a></div>
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
                    <td>
                        <a href="{{ route('prodi.show', $mhs->prodi_fk->name)}}">
                            {{ $mhs->prodi_fk->name}}
                    </td>

                    <td>
                        <div class="d-grid d-md-flex">
                            <a href="{{ route('mahasiswa.show', $mhs['name']) }}"><button type="button"
                                    class="btn btn-info me-md-2"><i class="bi bi-eye"></i></button></a>

                            <a href="{{ route('mahasiswa.edit', $mhs['id']) }}"><button type="button"
                                    class="btn btn-warning me-md-2"><i class="bi bi-pencil-square"></i></button></a>

                            <form action="{{ route('mahasiswa.destroy', $mhs['id']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
