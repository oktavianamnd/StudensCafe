@extends('kasir.dashboard')

@section('main')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Edit</h2></center>
        <form action="{{ route('kasir.update',$kasir->id) }}" method="POST">
          @csrf
            @method('PUT')
          <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" value="{{ $kasir->nama_pelanggan }}">
          </div>
          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu" value="{{ $kasir->nama_menu }}">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah" value="{{ $kasir->jumlah }}">
          </div>
          <div class="form-group">
            <label>Total Harga</label>
            <input type="text" class="form-control" name="total_harga" value="{{ $kasir->total_harga }}">
          </div>
          <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" value="{{ $kasir->nama_pegawai }}">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection