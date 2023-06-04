<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
   	<!-- Theme style -->
   <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Chosik Admin | Penjadwalan</title>
</head>
   <body>
	<div class="sidebar">
	   <div class="logo-details">
		<i class="bx bx-category"></i>
		<span class="logo_name">Chosik</span>
	   </div>
	   <ul class="nav-links">
		<li>
		   <a href="dashboard-admin" >
		      <i class="bx bx-grid-alt"></i>
			<span class="links_name">Dashboard </span>
		   </a>
		</li>
		<li>
			<a href="Werehouse">
			 <i class="bx bx-list-ul"></i>
			 <span class="links_name">Werehouse</span>
			  </a>
		 </li>
		<li>
			<a href="products">
			 <i class="bx bx-box"></i>
			 <span class="links_name">Products</span>
			</a>
		 </li>

		<li>
			<a href="employee">
			 <i class="material-symbols-outlined">Group</i>
			 <span class="links_name ">Employee</span>
		  </a>
		 </li>
		 <li>
			<a href="outlet">
			 <i class="material-symbols-outlined">location_away</i>
			 <span class="links_name">Outlets</span>
		  </a>
		 </li>
		 <li>
			<a href="customer">
			 <i class="material-symbols-outlined">groups</i>
			 <span class="links_name">Customer</span>
		  </a>
		 </li>
		 <li>
			<a href="transportasi">
			 <i class="material-symbols-outlined">transportation</i>
			 <span class="links_name">Transportasi</span>
		  </a>
		 </li>
		 <li>
			<a href="drivers">
			 <i class="material-symbols-outlined">cognition</i>
			 <span class="links_name">Drivers</span>
		  </a>
		 </li>
		 <li>
			<a href="jadwal">
			 <i class="bx bx-list-ul"></i>
			 <span class="links_name">Scheduling</span>
		  </a>
		 </li>
		<li>
		   <a href="logout">
			<i class="bx bx-log-out"></i>
			<span class="links_name">Log out</span>
		   </a>
		</li>
	   </ul>
	</div>
	<section class="home-section">
	   <nav>
		<div class="sidebar-button">
		   <i class="bx bx-menu sidebarBtn"></i>
		</div>
		<div class="profile-details">
		   <span class="admin_name">Choosik Admin</span>
		</div>
	   </nav>

	   <div class="home-content">
		<h3>Scheduling</h3>
			<button type="button" class="btn btn-success float-left" style="background-color: #1d528a; color: white;">
				<i class="far fa-credit-card"></i>
				<a href="jadwal-entry">Add Data</a>
			</button>
			<br>
			<br>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Transportasi Data Table PT Chosik</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>ID Schedule</th>
                  <th>Departure Day</th>
                  <th>ID Driver</th>
                  <th> ID Product</th>
                  <th>ID Delivery</th>
				  <th>Action</th>
                </tr>
				@foreach ($dtjadwal as $item)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $item->id_jadwal }}</td>
					<td>{{ date('d-m-Y', strtotime($item->hari)) }}</td>
					<td>{{ $item->id_supir }}</td>
					<td>{{ $item->id_barang }}</td>
					<td>{{ $item->id_pengiriman }}</td>
					<td>
						<a href="{{  url('jadwal-edit', $item->id) }}">Edit</a> | <a href="{{ url('jadwal-hapus', $item->id) }}">Delete</a>
					</td>
				</tr>
				@endforeach
                </thead>
              </table>
            </div>
		</div>
          </div>
		</div>
		<button type="button" class="btn btn-success float-right"  style="background-color: #1d528a; color: white;">
			<a href="driver-cetak">Cetak</a>
			</button>
	</section>
	@include('sweetalert::alert')
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
		 sidebar.classList.toggle("active");
		  if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
   </script>
    	 {{-- <footer class="main-footer">
   			 <strong>Copyright &copy; PT CHocolate Sikka</strong>
   				 All rights reserved.
  		</footer> --}}
</body>
</html>
