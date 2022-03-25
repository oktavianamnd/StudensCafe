@extends('manajer.dashboard')
@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Create</h2></center>
        <form action="{{ route('manajer.index') }}" method="POST">
          @csrf

          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Ketersediaan</label>
            <input type="text" class="form-control" name="ketersediaan" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection