@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <div class="row justify-content-start">
        <div class="col-4">
            @if (session('storeSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"><span
                        data-feather="check-square"></span>
                    {{ session('storeSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('deleteSuccess'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><span
                        data-feather="alert-triangle"></span>
                    {{ session('deleteSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listTamu as $tamu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tamu->created_at->isoFormat('dddd\, D\-MM\-Y') }}</td>
                        <td>{{ $tamu->name }}</td>
                        <td>{{ Str::limit($tamu->keperluan, 60, ' ...') }}</td>
                        <td>
                            <a href="/dashboard/bukutamus/{{ $tamu->id }}?pageMain={{ request()->get('page') ? request()->get('page') : 1 }} "
                                class="btn btn-outline-success btn-sm"><span data-feather="eye"></span></a>
                            <form action="/dashboard/bukutamus/{{ $tamu->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger btn-sm"
                                    onclick='return confirm(`Hapus daftar tamu atas nama {{ $tamu->name }} ?`)'><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> {{-- end of table --}}
    {{ $listTamu->links() }}
@endsection
