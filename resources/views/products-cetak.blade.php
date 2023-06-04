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
<h3>Products Data Report</h3>
</center>
<table id="customers">
    <tr>
        <th>NO</th>
        <th>Produk</th>
        <th>Categories</th>
        <th>Size</th>
        <th>Price</th>
       </tr>
       @foreach ($data as $item)
       <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <img src=" {{ asset('img/'.$item->gambar) }}" width='100px' alt=" " srcset=" ">
        </td>
        <td>{{ $item->jenis }}</td>
        <td>{{ $item->ukuran }}</td>
        <td>{{ $item->harga }}</td>
       </tr>
    </thead>
    @endforeach
</table>

</body>
</html>


