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
<h3>Sheduling Data Report</h3>
</center>
<table id="customers">
    <tr>
        <th>NO</th>
        <th>ID Jadwal</th>
        <th>Hari Keberangkatan</th>
        <th>ID Supir</th>
        <th> ID Barang</th>
        <th>ID Pingiriman</th>
      </tr>
      @foreach ($dtjadwal as $item)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->id_jadwal }}</td>
          <td>{{ date('d-m-Y', strtotime($item->hari)) }}</td>
          <td>{{ $item->id_supir }}</td>
          <td>{{ $item->id_barang }}</td>
          <td>{{ $item->id_pengiriman }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


