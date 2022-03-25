@extends('manajer.dashboard')

@section('main')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Edit</h2></center>
        <form action="{{ route('manajer.update',$manajer->id) }}" method="POST">
          @csrf
            @method('PUT')
          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu" value="{{ $manajer->nama_menu }}">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" value="{{ $manajer->harga }}">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $manajer->deskripsi }}">
          </div>
          <div class="form-group">
            <label>Ketersediaan</label>
            <input type="text" class="form-control" name="ketersediaan" value="{{ $manajer->ketersediaan }}">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection