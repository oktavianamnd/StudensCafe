@extends('manajer.dashboard')
@section('main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <center><h2 class="card-title">Laporan Pengunjung</h2></center>
        <form action="{{ url('laporan') }}" method="GET">
                <input type="date" name="keyword"> <button class="btn btn-inverse-dark btn-fw" type="submit">Cari</button>
        </form>
        <br>
        <a href="{{ url('manajer.onlinepdf') }}" class="btn-dark btn" target="_blank">Online PDF</a>
        <br><br>
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
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
