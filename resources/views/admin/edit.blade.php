@extends('admin.dashboard')
@section('main')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Edit</h2></center>
        <form action="{{ route('admin.update',$admin->id) }}" method="POST">
          @csrf
            @method('PUT')
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" value="{{ $admin->name }}">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{ $admin->email }}">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="{{ $admin->password }}">
          </div>
          <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role" value="{{ $admin->role }}">
          </div>
          <button type="submit" class="btn btn-primary me-2">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection