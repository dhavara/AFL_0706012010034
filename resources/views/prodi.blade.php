@extends('layout.mainlayout')

@section('title', 'Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="container">
        <br>
        <div class="container"><a href="{{ route('prodi.create') }}"><button type="submit"
                    class="btn btn-success mb-2"> + Add Prodi</button></a></div>
        <br>
        <table class="table table-striped">
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>TOTAL STUDENT</th>
                <th>HEAD DEPARTMENT</th>
                <th>ACTIONS</th>
            </tr>
            @foreach ($prodi as $pro)
                @php($i = $loop->index)
                @php($i++)

                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $pro['name'] }}</td>
                    <td>{{ $pro['total_student'] }}</td>
                    <td>{{ $pro['head_department'] }}</td>

                    <td>
                        <div class="d-grid d-md-flex">
                            <a href="{{ route('prodi.show', $pro['name']) }}"><button type="button"
                                    class="btn btn-info me-md-2"><i class="bi bi-eye"></i></button></a>

                            <a href="{{ route('prodi.edit', $pro['name']) }}"><button type="button"
                                    class="btn btn-warning me-md-2"><i class="bi bi-pencil-square"></i></button></a>

                            <form action="{{ route('prodi.destroy', $pro['name']) }}" method="post">
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
