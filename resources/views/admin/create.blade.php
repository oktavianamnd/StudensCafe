@extends('admin.dashboard')
@section('main')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Create</h2></center>
        <form action="{{ route('admin.index') }}" method="POST">
          @csrf

          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection