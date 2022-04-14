@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <form action="home" method="post">
        @csrf
        <div class="row pb-2">
            <div class="col-2">
                <label for="nama" class="form-label">Nama :</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control form-control-sm" id="nama" placeholder="Nama ..." name="nama" required
                    autofocus value="{{ old('nama') }}">
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin :</label>
            </div>
            <div class="col-4">
                <div class="row justify-content-center">
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="pria" checked>
                        <label class="form-check-label" for="pria">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="alamat" class="form-label">Alamat :</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat ..." name="alamat"
                    required value="{{ old('alamat') }}">
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="nohp" class="form-label">Nomor Handphone :</label>
            </div>
            <div class="col-4">
                <input type="number" class="form-control form-control-sm" id="nohp" placeholder="Nomor HP ..." name="nohp"
                    required value="{{ old('nohp') }}">
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-2">
                <label for="keperluan" class="form-label">Keperluan :</label>
            </div>
            <div class="col-4">
                <textarea class="form-control" aria-label="With textarea" id="nohp" style="height: 200px"></textarea>
            </div>
        </div>

        <button type="button" class="btn btn-primary">Tambah</button>
    </form>
@endsection
