@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Waktu</th>
                <td>{{ $tamu->created_at->isoFormat('h:m \- dddd, D MMMM Y') }}</td>
            </tr>
            <tr>
                <th scope="row">Nama</th>
                <td>{{ $tamu->name }}</td>
            </tr>
            <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>{{ $tamu->jeniskelamin }}</td>
            </tr>
            <tr>
                <th scope="row">Alamat</th>
                <td>{{ $tamu->alamat }}</td>
            </tr>
            <tr>
                <th scope="row">Nomor Handphone</th>
                <td>{{ $tamu->nohp }}</td>
            </tr>
            <tr>
                <th scope="row">Keperluan</th>
                <td>{{ $tamu->keperluan }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/dashboard/bukutamus"><button type="button" class="btn btn-primary">Kembali</button></a>
@endsection
