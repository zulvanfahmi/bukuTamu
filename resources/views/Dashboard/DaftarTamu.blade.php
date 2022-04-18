@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listTamu as $tamu)
                    <tr>
                        <td>{{ $tamu->id }}</td>
                        <td>{{ $tamu->name }}</td>
                        <td>{{ $tamu->keperluan }}</td>
                        <td>
                            <a href="/dashboard/bukutamus/{{ $tamu->id }}" class="btn btn-outline-success btn-sm"><span
                                    data-feather="eye"></span></a>
                            <form action="#" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger btn-sm"><span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> {{-- end of table --}}
@endsection
