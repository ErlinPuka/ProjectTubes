<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1d528a;
  color: white;
}
</style>
</head>
<body>
<center>
<h3>Werehouse Data Report</h3>
</center>
<table id="customers">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Harga</th>
        <th>Tanggal Produksi</th>
        <th>Tanggal Expired</th>
        <th >Lokasi Barang</th>
      </tr>
      @foreach ($data as $item)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->jenisproduk }}</td>
          <td>{{ $item->harga }}</td>
          <td>{{ date('d-m-Y', strtotime($item->produksi)) }}</td>
          <td>{{ date('d-m-Y', strtotime($item->expired)) }}</td>
          <td>{{ $item->lokasi }}</td>
      </tr>
        </tr>
       @endforeach
</table>

</body>
</html>


