@extends('layouts.frontend')
@section('title','Data Obat')
@section('judul','Data Obat')
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {!! \Session::get('success') !!}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Obat</h3>
          <a href="/obat/form" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($hasil as $item)
                <tr>
                  <th scope="row">{{$nomor++}}</th>
                  <td>{{$item->kode_obat}}</td>
                  <td>{{$item->nama_obat}}</td>
                  <td>{{$item->jenis_obat}}</td>
                  <td>{{$item->harga}}</td>
                  <td>{{$item->stok}}</td>
                  <td>
                    <a href="{{ url('/obat/'.$item->id.'/edit') }}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#a{{$item->kode_obat}}">
                      <i class="fa fa-trash"></i>
                    </button>
                    {{-- modal hapus--}}
                    <div class="modal fade" id="a{{$item->kode_obat}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Hapus</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Yakin Data Obat <b>{{$item->nama_obat}}</b> ingin dihapus?
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <form action="/obat/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Yakin</button>
                            </form>
                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    {{-- akhir modal hapus --}}
                  </td>
                </tr>
              @empty
                  <tr>
                    <td colspan="7">Tidak Ada Data</td>
                  </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
@endsection