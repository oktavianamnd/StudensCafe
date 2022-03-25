@extends('manajer.dashboard')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Menu</h2></center>
        <div class="template-demo mt-2">
            <a class="btn btn-outline-dark btn-icon-text" href="{{ route('manajer.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a> 
            
          </div>
        </p>
        <div class="table-responsive">
          <table class="table table-muted text-dark">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama Menu </th>
                <th> Harga </th>
                <th> Deskripsi </th>
                <th> Ketersediaan </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($manajer as $manajers)
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $manajers->nama_menu }} </td>
                <td> {{ $manajers->harga }} </td>
                <td> {{ $manajers->deskripsi }} </td>
                <td> {{ $manajers->ketersediaan}} </td>
                <td> <form action="{{ route('manajer.destroy', $manajers->id) }}" method="post">
           
                    <a class="btn btn-inverse-dark btn-fw" href="{{ route('manajer.edit', $manajers->id) }}">Edit</a>
     
                    @csrf
                    @method('delete')
        
                    <button type="submit" class="btn btn-inverse-dark btn-fw">Hapus</button>
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