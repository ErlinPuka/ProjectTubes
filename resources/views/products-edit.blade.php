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
	  <h3>Edit Products</h3>
	  <div class="form-login">
		<form action="{{ url('products-update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{  csrf_field() }}
			
 		    <label for="products">Jenis Produk</label>
			<input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis" value="{{ $dt->jenis }}"/>

            <label for="products">Ukuran</label>
            <input class="input" type="text" name="ukuran" id="ukuran" placeholder="Ukuran" value="{{ $dt->ukuran }}" />

			<label for="products">Harga</label>
            <input class="input" type="text" name="harga" id="harga" placeholder="Harga" value="{{ $dt->harga }}" />

			<label for="products">Produk</label>
			<input class="input" type="file" name="gambar" id="gambar" style="margin-bottom: 20px" />
         {{-- <img src=" {{ asset('img/'.$dt->gambar) }}" width='100px' alt=" " srcset=" "> --}}

   
			<div class="form-group">
				<button type="submit" class="btn btn-success" name="simpan" style="background-color: #1d528a; color: white;">
					Edit
				</button>
			  </div>
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
