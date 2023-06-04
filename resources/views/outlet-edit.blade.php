<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
  <!-- Theme style -->
   <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chosik Admin | Products Entry</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">Chosik</span>
	</div>
	<ul class="nav-links">
		<li>
			<a href="dashboard-admin">
			   <i class="bx bx-grid-alt"></i>
			   <span class="links_name">Dashboard</span>
			</a>
		   </li>
		   <li>
			<a href="Werehouse">
			 <i class="bx bx-list-ul"></i>
			 <span class="links_name">Werehouse</span>
			  </a>
		 </li>
		<li>
			<a href="Products">
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
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header" style="background-color:  rgb(24, 32, 122)"> 
                <h3 class="card-title">Input Outlet</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>

              <div class="card-body">
				<form action="{{ url('outlet-update', $peg->id) }}" method="post">
					{{  csrf_field() }}
                <div class="form-group">
                  <label for="inputName">ID Outlet</label>
                  <input class="input" type="text" name="id_outlet" id="id_outlet" placeholder="ID Outlet" value="{{ $peg->id_outlet }}" />
                </div>
                <div class="form-group">
					<label for="inputName">Nama Pegawai</label>
					<input class="input" type="text" name="nama" id="nama" placeholder="Nama Outlet"value="{{ $peg->nama }}" />
				  </div>

                <div class="form-group">
					<label for="inputName">Alamat</label>
					<input class="input" type="text" name="alamat" id="alamat" placeholder="Alamat" value="{{ $peg->alamat }}"/>
				  </div>

                <div class="form-group">
					<label for="inputName">No HP</label>
					<input class="input" type="text" name="no_hp" id="no_hp" placeholder="NO HP" value="{{ $peg->no_hp }}" />
				  </div>

				  <div class="form-group">
					<label for="inputName">ID Barang</label>
					<input class="input" type="text" name="id_barang" id="id_barang" placeholder=" ID Barang" value="{{ $peg->id_barang }}" />
				  </div>
				  
				  <div class="form-group">
					<button type="submit" class="btn btn-success" name="simpan" style="background-color:#1d528a; color: white;">
						Edit
					</button>
				  </div>
				  </button>
              </div>
            </div>
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
