<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- untuk Font Awesosme Icons -->
  <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- DataTables -->
  <link rel="stylesheet" href="{{  asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{  asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <!-- untuk Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- untuk scrolbar -->
  <link rel="stylesheet" type="text/css" href="{{  asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
		<span class="admin_name">Chosik Admin</span>
	  </div>
	</nav>

  <div class="home-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            This page is held and managed by admins only
          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> PT Chosik
                  <small class="float-right">Date: 04/06/2023</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                About
                <address>
                  <strong>Admin, Chosik</strong><br>
                  Madelbertha Fridolin Puka<br>
                  Jalan Brai Gang 07, Maumere<br>
                  Phone: (804) 123-5432<br>
                  Email: madelbertha@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                About
                <address>
                  <strong>Admin, Chosik</strong><br>
                  Ragina Arnoldina Puka<br>
                  Jalan Brai Gang 06, Maumere<br>
                  Phone: (555) 539-1037<br>
                  Email: regina@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                About
                <address>
                  <strong>Admin, Chosik</strong><br>
                  Ariel Goran<br>
                  Lingkar Luar, Maumere<br>
                  Phone: (555) 549-1804<br>
                  Email: Ariel@gmail.com
                </address>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="button" class="btn btn-success float-left" style="background-color: #1d528a; color: white;">
              <i class="far fa-credit-card"></i>
              <a href="employee-entry" target="_blank">Add Data</a>
            </button>
            <button type="button" class="btn btn-success"  style="background-color: #1d528a; color: white;">
              <a href="employee-cetak">Report</a>
            </button>
            <br>
            <br>
            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>No HP</th>
                    <th>ID Driver</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($dtemployee as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id_pegawai }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->divisi }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->id_supir }}</td>
                    <td>
                      <a href="{{  url('employee-edit', $item->id) }}">Edit</a> | <a href="{{ url('employee-hapus', $item->id) }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </thead>
                </table>
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