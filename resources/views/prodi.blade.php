@extends('layout.mainlayout')

@section('title', 'Prodi')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="container">
        <br>
        <div class="container"><a href="{{ route('prodi.create') }}"><button type="submit"
                    class="btn btn-warning mb-2">Add Prodi</button></a></div>
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
                                    class="btn btn-primary me-md-2">Show</button></a>

                            <a href="{{ route('prodi.edit', $pro['name']) }}"><button type="button"
                                    class="btn btn-info me-md-2">Edit</button></a>

                            <form action="{{ route('prodi.destroy', $pro['name']) }}" method="post">
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
