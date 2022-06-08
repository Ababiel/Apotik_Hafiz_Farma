@extends('layouts.frontend')
@section('title','Form Edit Obat')
@section('judul','Form Edit Obat')
@section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Obat</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="/obat/{{$edit->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Kode Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="{{$edit->kode_obat}}" name="kode_obat" placeholder="Masukkan Kode">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" value="{{$edit->nama_obat}}" name="nama_obat" placeholder="Masukkan Nama Obat">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" value="{{$edit->jenis_obat}}" name="jenis_obat" placeholder="Masukkan Jenis Obat">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="string" class="form-control" id="inputPassword" value="{{$edit->harga}}" name="harga" placeholder="Masukkan Harga">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                    <input type="string" class="form-control" id="inputPassword" value="{{$edit->stok}}" name="stok" placeholder="Masukkan Stok Obat">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="{{route('obat')}}" class="btn btn-secondary">Batal</a>
              </form>
        </div>
      </div>
@endsection