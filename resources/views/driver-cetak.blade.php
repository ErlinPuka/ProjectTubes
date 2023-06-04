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
<h3>Drivers Data Report</h3>
</center>
<table id="customers">
    <tr>
        <th>#</th>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>No HP</th>
        <th>ID Employee</th>
      </tr>
      @foreach ($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->id_driver }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->no_hp }}</td>
        <td>{{ $item->id_pegawai }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>


