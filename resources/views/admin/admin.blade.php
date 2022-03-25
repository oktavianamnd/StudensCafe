@extends('admin.dashboard')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman User</h2></center>
        <div class="template-demo mt-2">
            <a class="btn btn-outline-dark btn-icon-text" href="{{ route('admin.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a> 
            
          </div>
        </p>
        <div class="table-responsive">
          <table class="table table-muted text-dark">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama </th>
                <th> Email </th>
                <th> Password </th>
                <th> Role </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admins)
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $admins->name }} </td>
                <td> {{ $admins->email }} </td>
                <td> {{ $admins->password }} </td>
                <td> {{ $admins->role}} </td>
                <td> <form action="{{ route('admin.destroy', $admins->id) }}" method="post">
           
                    <a class="btn btn-inverse-info btn-fw" href="{{ route('admin.edit', $admins->id) }}">Edit</a>
     
                    @csrf
                    @method('delete')
        
                    <button type="submit" class="btn btn-inverse-warning btn-fw">Hapus</button>
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
