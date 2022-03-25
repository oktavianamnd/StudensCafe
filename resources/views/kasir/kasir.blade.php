@extends('kasir.dashboard')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Halaman Transaksi</h2></center>
        <div class="template-demo mt-2">
            <a class="btn btn-outline-dark btn-icon-text" href="{{ route('kasir.create') }}"> Create <i class="mdi mdi-file-check btn-icon-append"></i></a> 
            
          </div>
        </p>
        @if ($message = Session::get('succes'))
                        <div class="alert alert-primary" role="alert">
                           {{$message}}
                        </div>
        @endif
        <div class="table-responsive">
          <table class="table table-muted text-dark">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama Pelanggan </th>
                <th> Nama Menu </th>
                <th> Jumlah </th>
                <th> Total Harga </th>
                <th> Nama Pegawai </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kasir as $kasirs)
              <tr>
                <td> {{ ++$i }}  </td>
                <td> {{ $kasirs->nama_pelanggan }} </td>
                <td> {{ $kasirs->nama_menu }} </td>
                <td> {{ $kasirs->jumlah }} </td>
                <td> {{ $kasirs->total_harga}} </td>
                <td> {{ $kasirs->nama_pegawai}} </td>
                <td> <form action="{{ route('kasir.destroy', $kasirs->id) }}" method="post">
           
                    <a class="btn btn-inverse-info btn-fw" href="{{ route('kasir.edit', $kasirs->id) }}">Edit</a>
     
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