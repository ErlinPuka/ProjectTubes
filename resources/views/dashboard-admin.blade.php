<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Shortcut icon" href = "{{ asset('images/logo.png') }}"alt="">
        <title>PT Chosik</title>
		<!-- untuk tampilan webistenya -->
        <link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}" />
		<!-- untuk icon yang new outlet,dll -->
		<link rel="stylesheet" type="text/css" href="{{  asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}" />
        <!-- untuk scrolbar -->
 		<link rel="stylesheet" type="text/css" href="{{  asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  		<!-- untuk Theme style -->
  		<link rel="stylesheet" type="text/css" href="{{  asset('adminlte/dist/css/adminlte.min.css')}}">
		<!-- untuk icon boxnya -->
		<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <title>Admin Chosik</title>
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
	      <span class="admin_name">Admin Chosik</span>
	   </div>
	</nav>

	<div class="home-content">
		 <div class="container-fluid">
			<div class="row">
			  <div class="col-12 col-sm-6 col-md-3">
				<div class="info-box">
				  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
	
				  <div class="info-box-content">
					<span class="info-box-text">CPU Traffic</span>
					<span class="info-box-number">
					  5
					  <small>%</small>
					</span>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
				  <div class="info-box-content">
					{{-- <a class="info-box-text" href="outlet">Likes</a> --}}
					<span class="info-box-text">Likes</span>
					<span class="info-box-number">110</span>
				  </div>
				</div>
			  </div>
	
			  <div class="clearfix hidden-md-up"></div>
			  <div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
				  <div class="info-box-content">
					<a class="info-box-text">Distribution</a>
					<span class="info-box-number">90%</span>
				  </div>
				</div>
			  </div>
			  <div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
				  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
				  <div class="info-box-content">
					<a class="info-box-text">New Customer</a>
					<span class="info-box-number">50</span>
				  </div>
				</div>
			  </div>
			</div>
		</div>

			<div class="row">
				<div class="col-md-12">
				  <div class="card">
					<div class="card-header">
					  <h5 class="card-title">Monthly Recap Report</h5>
	  
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
							<strong>Distribution: 1 January - 30 July, 2023</strong>
						  </p>
	  
						  <div class="chart">
							<center>
								<img src="{{ asset('images/diagram4.png') }}"alt="image"height="275" style="height: 200px">
							</center>
						</div>
						</div>
						<div class="col-md-4">
						  <p class="text-center">
							<strong>Goal Completion</strong>
						  </p>
	  
						  <div class="progress-group">
							{{-- ketersediaan produk --}}
							Availability of Products
							<span class="float-right"><b>98%</b></span>
							<div class="progress progress-sm">
							  <div class="progress-bar bg-primary" style="width: 80%"></div>
							</div>
						  </div>
	  
						  <div class="progress-group">
							Distribution Product
							<span class="float-right"><b>93%</b></span>
							<div class="progress progress-sm">
							  <div class="progress-bar bg-danger" style="width: 75%"></div>
							</div>
						  </div>
	   
						  <div class="progress-group">
							<span class="progress-text">Customer Additions</span>
							<span class="float-right"><b>75%</b></span>
							<div class="progress progress-sm">
							  <div class="progress-bar bg-success" style="width: 60%"></div>
							</div>
						  </div>
	  
						  <div class="progress-group">
							{{-- penambahan outlet --}}
							Additional Outlets
							<span class="float-right"><b>65%</b></span>
							<div class="progress progress-sm">
							  <div class="progress-bar bg-warning" style="width: 50%"></div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="card-footer">
					  <div class="row">
						<div class="col-sm-3 col-6">
						  <div class="description-block border-right">
							<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 75%</span>
							<h5 class="description-header">Rp.500.000.000</h5>
							{{-- total pendapatan --}}
							<span class="description-text">TOTAL REVENUE</span>
						  </div>
						</div>
						<div class="col-sm-3 col-6">
						  <div class="description-block border-right">
							<span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 30%</span>
							<h5 class="description-header">RP.178.435.000 </h5>
							{{-- total pengeluaran --}}
							<span class="description-text">TOTAL COST</span>
						  </div>
						</div>
						<div class="col-sm-3 col-6">
						  <div class="description-block border-right">
							<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 45%%</span>
							<h5 class="description-header">Rp.321.565.000</h5>
							{{-- total keuntungan --}}
							<span class="description-text">TOTAL PROFIT</span>
						  </div>
						</div>
						<div class="col-sm-3 col-6">
						  <div class="description-block">
							<span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 75%</span>
							<h5 class="description-header">Rp.5.000.00</h5>
							<span class="description-text">Total Losses</span>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>

			  {{-- Product --}}
			  <div class="card">
				<div class="left">
				{{-- <div style="margin:0 0px 0px 0; width:40%;"> --}}
				{{-- <div style="display: flex; flex-wrap: wrap;"> --}}
					{{-- <div style=" margin: 0 0px 0px 0;"> --}}
				<div class="card-header border-0">
				  <h3 class="card-title">Products</h3>
				  <div class="card-tools">
					<a href="#" class="btn btn-tool btn-sm">
					  <i class="fas fa-download"></i>
					</a>
					<a href="#" class="btn btn-tool btn-sm">
					  <i class="fas fa-bars"></i>
					</a>
				  </div>
				</div>
				<div class="card-body table-responsive p-0">
				  <table class="table table-striped table-valign-middle">
					<thead>
					<tr>
					  <th>Product</th>
					  <th>Price</th>
					  <th>Distributor</th>
					  <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					  <td>
						<img src="{{ asset('images/coklat_pasta.jpg') }}"alt="Product 1" class="img-circle img-size-32 mr-2">
						Chocolate Pasta
					  </td>
					  <td>85000</td>
					  <td>
						<small class="text-success mr-1">
						  <i class="fas fa-arrow-up"></i>
						  35%
						</small>
						12.500/2 Month
					  </td>
					  <td>
						<a href="#" class="text-muted">
						  <i class="fas fa-search"></i>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<img src="{{ asset('images/darkcoklat.jpg') }}"alt="Product 1" class="img-circle img-size-32 mr-2">
						Dark Chocolate
					  </td>
					  <td>30000</td>
					  <td>
						<small class="text-warning mr-1">
							<i class="fas fa-arrow-up"></i>
						  25%
						</small>
						12.000/2 Month
					  </td>
					  <td>
						<a href="#" class="text-muted">
						  <i class="fas fa-search"></i>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<img src="{{ asset('images/whitecoklat.jpg') }}"alt="Product 1" class="img-circle img-size-32 mr-2">
						White Chocolate
					  </td>
					  <td>30000</td>
					  <td>
						<small class="text-danger mr-1">
						  <i class="fas fa-arrow-down"></i>
						  10%
						</small>
						8.000/2 Mounth
					  </td>
					  <td>
						<a href="#" class="text-muted">
						  <i class="fas fa-search"></i>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<img src="{{ asset('images/milkcoklat.jpg') }}"alt="Product 1" class="img-circle img-size-32 mr-2">
						Milk Chocolate
					  </td>
					  <td>75000</td>
					  <td>
						<small class="text-success mr-1">
						  <i class="fas fa-arrow-up"></i>
						  63%
						</small>
						15.000/2 Month
					  </td>
					  <td>
						<a href="#" class="text-muted">
						  <i class="fas fa-search"></i>
						</a>
					  </td>
					</tr>
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>

		<div class="row">	
			<div class="col-md-6">
				<div class="card">
                  <div class="card-header">
                    <h3 class="card-title">New Employee</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Albrycia</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Febiola</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Anna</a>
                        <span class="users-list-date">11 March</span>
                      </li>
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Burga</a>
                        <span class="users-list-date">9 March</span>
                      </li>
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Fridolin</a>
                        <span class="users-list-date">13 May</span>
                      </li>
                      <li>
                        <img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Ragina</a>
                        <span class="users-list-date">30 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Ariell</a>
                        <span class="users-list-date">9 March</span>
                      </li>
                      <li>
						<img src="{{ asset('images/person1.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Meylani</a>
                        <span class="users-list-date">10 March</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript::">View All</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>

			<div class="col-md-6">
				<div class="card">
                  <div class="card-header">
                    <h3 class="card-title">New Outlet</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Outlet</span>
					  <br>
					  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Bogadhar</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Rejekit</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">TOOP</a>
                        <span class="users-list-date">12 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Roxxy</a>
                        <span class="users-list-date">09 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Baratana</a>
                        <span class="users-list-date">08 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Sehati</a>
                        <span class="users-list-date">08 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Jayama</a>
                        <span class="users-list-date">09 May</span>
                      </li>
                      <li>
						<img src="{{ asset('images/ruko5.png')}}" alt="User Image">
                        <a class="users-list-name" href="#">Startat</a>
                        <span class="users-list-date">07 May</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript::">View All</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
			</div>
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
				<!-- /.card-header -->
				<div class="card-body">
				  <div class="row">
					<div class="col-md-8">
					  <p class="text-center">
						<strong>Product Availability Diagram in the Warehouse</strong>
					  </p>
  
					  <div class="chart">
						<!-- Sales Chart Canvas -->
						<center>
							<img src="{{ asset('images/diagramgudang.png') }}"alt="image" width="500" height="250" style="height: 200px">
						</center>
					</div>
					  <!-- /.chart-responsive -->
					</div>
					<!-- /.col -->
					<div class="col-md-4">
					  <p class="text-center">
						<strong>Availability of Items</strong>
					  </p>
  
					  <div class="progress-group">
						{{-- ketersediaan produk --}}
						Milk Chocolate
						<span class="float-right"><b>85%</b></span>
						<div class="progress progress-sm">
						  <div class="progress-bar bg-primary" style="width: 80%"></div>
						</div>
					  </div>
					  <!-- /.progress-group -->
  
					  <div class="progress-group">
						Dark Chocolate
						<span class="float-right"><b>80%</b></span>
						<div class="progress progress-sm">
						  <div class="progress-bar bg-danger" style="width: 75%"></div>
						</div>
					  </div>
   
					  <!-- /.progress-group -->
					  <div class="progress-group">
						<span class="progress-text">White Chocolate</span>
						<span class="float-right"><b>83%</b></span>
						<div class="progress progress-sm">
						  <div class="progress-bar bg-success" style="width: 60%"></div>
						</div>
					  </div>
  
					  <!-- /.progress-group -->
					  <div class="progress-group">
						{{-- penambahan outlet --}}
						Chocolate Pasta
						<span class="float-right"><b>90%</b></span>
						<div class="progress progress-sm">
						  <div class="progress-bar bg-warning" style="width: 50%"></div>
						</div>
					  </div>
					  <!-- /.progress-group -->
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			</div>
		</div>
	</div>

		
<!-- jQuery -->
<script src="{{  asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{  asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{  asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{  asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{  asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{  asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{  asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{  asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{  asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{  asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{  asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{  asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{  asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{  asset('adminlte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{  asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{  asset('adminlte/dist/js/demo.js')}}"></script>

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
 		 <footer class="main-footer">
   			 <strong>Copyright &copy; PT CHocolate Sikka</strong>
   				 All rights reserved.
  		</footer>
    </body>
</html>