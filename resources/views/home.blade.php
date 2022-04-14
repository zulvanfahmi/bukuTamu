@extends('partials.main')
@section('content')
    <h1>Selamat Datang di ...</h1>
    <form action="home" method="post">
        @csrf
        <div>
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama ..." name="nama" required
                autofocus value="{{ old('nama') }}">
        </div>
        <div>
            <label for="jeniskelamin" class="form-label">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="pria">
                <label class="form-check-label" for="pria">
                    Pria
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
        </div>
        <div>
            <label for="alamat" class="form-label">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat ..." name="alamat" required
                value="{{ old('alamat') }}">
        </div>
        <div>
            <label for="nohp" class="form-label">Nomor Handphone :</label>
            <input type="number" class="form-control" id="nohp" placeholder="Nomor HP ..." name="nohp" required
                value="{{ old('nohp') }}">
        </div>
        <div>
            <label for="keperluan" class="form-label">Keperluan :</label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" id="nohp"></textarea>
            </div>
        </div>

    </form>
@endsection
