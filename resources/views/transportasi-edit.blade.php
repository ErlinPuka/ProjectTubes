<!DOCTYPE html>
<html lang="en">	
<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
   <!-- Theme style -->
<link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Chosik Admin | Transportasi Edit</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">Chosik</span>
	</div>
	<ul class="nav-links">
		<li>
		 <a href="dashboard-admin" class="active">
			<i class="bx bx-grid-alt"></i>
			<span class="links_name">Dashboard</span>
		 </a>
		</li>
		<li>
		 <a href="Werehouse" >
			<i class="bx bx-box"></i>
			<span class="links_name">Werehouse</span>
		 </a>
		</li>
		<li>
		   <a href="products">
			<i class="bx bx-list-ul"></i>
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
		 <a href="#">
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
		<span class="admin_name">Chosik Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	   <h3>Edit Transportasi</h3>
	   <div class="form-login">
		<form action="{{ url('transportasi-update', $peg->id) }}" method="post">
			{{  csrf_field() }}
			<label for="id_pengiriman">ID Pengiriman</label>
			<input class="input" type="text" name="id_pengiriman" id="id_pengiriman" placeholder="ID Pengiriman" value="{{ $peg->id_pengiriman }}"/>
 
			<label for="nama">Nama Kendaraan</label>
			<input class="input" type="text" name="nama" id="nama" placeholder="Nama Kendaraan"value="{{ $peg->nama }}" />
			
            <label for="jenis">Jenis Kendaraan</label>
			<input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis Kendaraan"value="{{ $peg->jenis }}" />
			
            <label for="berat_muatan">Berat Muatan</label>
			<input class="input" type="text" name="berat_muatan"  id="berat_muatan" placeholder="Berat Muatan"value="{{ $peg->berat_muatan }}"  />
			
            <label for="id_supir">ID Spir</label>
			<input class="input" type="text" name="id_supir"  id="id_supir" placeholder="ID Supir" value="{{ $peg->id_supir }}" />
 
			<button type="submit" class="btn btn-success" name="simpan" style="background-color: #1d528a; color: white;">
				Edit
			</button>
		</form>
	   </div>
	</div>
   </section>
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
</body>
</html>
