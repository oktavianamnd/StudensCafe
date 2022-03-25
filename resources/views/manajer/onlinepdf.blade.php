<center><h2>Laporan Pengunjung Students Cafe</h2></center>
<br><br><br>
<table border="5" class="p-3">
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
@foreach ($kasir as $kasirs)
              <tr>
                <td> {{ $loop->iteration}}  </td>
                <td> {{ $kasirs->nama_pelanggan }} </td>
                <td> {{ $kasirs->nama_menu }} </td>
                <td> {{ $kasirs->jumlah }} </td>
                <td> {{ $kasirs->total_harga}} </td>
                <td> {{ $kasirs->nama_pegawai}} </td>
              </tr>
@endforeach
</table>