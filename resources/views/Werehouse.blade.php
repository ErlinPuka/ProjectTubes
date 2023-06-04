<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
   <link rel="icon" href="assets/icon.png" />
   	<!-- Theme style -->
   <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Chosik Admin | Werehouse</title>
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
		<h3>Werehouse</h3>
		<button type="button" class="btn btn-success float-left" style="background-color: #1d528a; color: white;">
			<i class="far fa-credit-card"></i>
			<a href="werehouse-entry">Add Data</a>
		  </button>
		  <button type="button" class="btn btn-success"  style="background-color: #1d528a; color: white;">
			<a href="werehouse-cetak" target="_blank">Print</a>
		</button>
		  <br>
		  <br>
		<table class="table-data">
		   <thead>
			<tr>
			  <th>No</th>
			  <th>Product Name</th>
			  <th>Product Types</th>
              <th>Price</th>
              <th>Date of Production</th>
              <th>Expiry Date</th>
              <th>Product Locations</th>
			  <th>Action</th>
			</tr>
			@foreach ($dtwerehouse as $item)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $item->nama }}</td>
				<td>{{ $item->jenisproduk }}</td>
				<td>{{ $item->harga }}</td>
				<td>{{ date('d-m-Y', strtotime($item->produksi)) }}</td>
				<td>{{ date('d-m-Y', strtotime($item->expired)) }}</td>
				<td>{{ $item->lokasi }}</td>
				<td>
					<a href="{{  url('werehouse-edit', $item->id) }}">Edit</a> | <a href="{{ url('werehouse-hapus', $item->id) }}">Delete</a>
				</td>
			</tr>
			  </tr>
			 @endforeach
		   </thead>
		</table>
		<br>
		{{-- <button type="button" class="btn btn-success float-left"  style="background-color: #1d528a; color: white;">
			<a href="categories-cetak.php">Cetak</a>
		</button> --}}
	   </div>

	   <div class="row">
		<div class="col-md-12">
		  <div class="card">
			<div class="card-header">
			  <h5 class="card-title">Inventory</h5>

			  <div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse">
				  <i class="fas fa-minus"></i>
				</button>
				<div class="btn-group">
				  <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
					<i class="fas fa-wrench"></i>
				  </button>
				  <div class="dropdown-menu dropdown-menu-right" role="menu">
					<a href="#" class="dropdown-item">Action</a>
					<a href="#" class="dropdown-item">Another action</a>
					<a href="#" class="dropdown-item">Something else here</a>
					<a class="dropdown-divider"></a>
					<a href="#" class="dropdown-item">Separated link</a>
				  </div>
				</div>
				<button type="button" class="btn btn-tool" data-card-widget="remove">
				  <i class="fas fa-times"></i>
				</button>
			  </div>
			</div>
			<div class="card-body">
			  <div class="row">
				<div class="col-md-8">
				  <p class="text-center">
					<strong>Product Availability Diagram in the Warehouse</strong>
				  </p>

				  <div class="chart">
					<center>
						<img src="{{ asset('images/diagramgudang.png') }}"alt="image" width="500" height="250" style="height: 200px">
					</center>
				</div>
				</div>
				<div class="col-md-4">
				  <p class="text-center">
					<strong>Availability of Items</strong>
				  </p>

				  <div class="progress-group">
					Milk Chocolate
					<span class="float-right"><b>85%</b></span>
					<div class="progress progress-sm">
					  <div class="progress-bar bg-primary" style="width: 80%"></div>
					</div>
				  </div>
				  <div class="progress-group">
					Dark Chocolate
					<span class="float-right"><b>80%</b></span>
					<div class="progress progress-sm">
					  <div class="progress-bar bg-danger" style="width: 75%"></div>
					</div>
				  </div>
				  <div class="progress-group">
					<span class="progress-text">White Chocolate</span>
					<span class="float-right"><b>83%</b></span>
					<div class="progress progress-sm">
					  <div class="progress-bar bg-success" style="width: 60%"></div>
					</div>
				  </div>
				  <div class="progress-group">
					Chocolate Pasta
					<span class="float-right"><b>90%</b></span>
					<div class="progress progress-sm">
					  <div class="progress-bar bg-warning" style="width: 50%"></div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>

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
    	 <footer class="main-footer">
   			 <strong>Copyright &copy; PT CHocolate Sikka</strong>
   				 All rights reserved.
  		</footer>
</body>
</html>
