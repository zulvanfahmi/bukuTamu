@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <p>Waktu : {{ $tamu->created_at->isoFormat('h:m \- dddd, D MMMM Y') }}</p>
    <p>Nama : {{ $tamu->name }}</p>
    <p>Jenis Kelamin : {{ $tamu->jeniskelamin }}</p>
    <p>Alamat : {{ $tamu->alamat }}</p>
    <p>Nomor Handphone : {{ $tamu->nohp }}</p>
    <p>Keperluan : {{ $tamu->keperluan }}</p>
    <a href="/dashboard/bukutamus"><button type="button" class="btn btn-primary">Kembali</button></a>
@endsection
