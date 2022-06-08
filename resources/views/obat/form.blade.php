@extends('layouts.frontend')
@section('title','Form Obat')
@section('judul','Form Obat')
@section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Obat</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('obatStore')}}">
                @csrf
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Kode Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="{{ old('kode_obat') }}" name="kode_obat" placeholder="Masukkan Kode">
                      @error('kode_obat')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="nama_obat" placeholder="Masukkan Nama Obat">
                    @error('nama_obat')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="jenis_obat" placeholder="Masukkan Jenis Obat">
                    @error('jenis_obat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="string" class="form-control" id="inputPassword" name="harga" placeholder="Masukkan Harga Obat">
                    @error('harga')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword" name="stok" placeholder="Masukkan Stok Obat">
                    @error('stok')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
        </div>
      </div>
@endsection