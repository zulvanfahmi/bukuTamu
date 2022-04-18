@extends('partialsDashboard.mainDashboard')
@section('dashboardContent')
    <form action="/dashboard/bukutamus" method="post">
        @csrf
        <div class="row pb-2">
            <div class="col-2">
                <label for="name" class="form-label">Nama :</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name"
                    placeholder="Nama" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin :</label>
            </div>
            <div class="col-4">
                <div class="row justify-content-center">
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="laki" checked
                            value="Laki-laki">
                        <label class="form-check-label" for="pria">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="row">
                    @error('jeniskelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="alamat" class="form-label">Alamat :</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat"
                    placeholder="Alamat" name="alamat" required value="{{ old('alamat') }}">
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-2">
                <label for="nohp" class="form-label">Nomor Handphone :</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control form-control-sm @error('nohp') is-invalid @enderror" id="nohp"
                    placeholder="Nomor HP" name="nohp" required value="{{ old('nohp') }}">
                @error('nohp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-2">
                <label for="keperluan" class="form-label">Keperluan :</label>
            </div>
            <div class="col-4">
                <textarea class="form-control @error('keperluan') is-invalid @enderror" aria-label="With textarea" id="keperluan"
                    style="height: 200px" placeholder="Keperluan" name="keperluan">{{ old('keperluan') }}</textarea>
                @error('keperluan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
