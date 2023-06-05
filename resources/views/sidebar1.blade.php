<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Boxicons -->
	  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <title>Gudang Bakso </title>
    <link rel="icon" href="{{ asset('asset/icon.png') }}" />
    <link rel="stylesheet" href="css/admin.css" />
    <!-- Boxicons CDN Link -->
 </head>
  <body>
  <div class="sidebar">
    <ul class="nav-links">
      <li>
        <i class="bx bx-category"></i><span class="links_name">Gudang Bakso</span>
      </li>
     {{-- <li>
         <a href="/home">
             <i class="bx bx-grid-alt"></i>
             <span class="links_name">Home</span>
          </a>
         </li> --}}

         <li>
          <a href="/gudang">
              <i class="bx bx-box"></i>
              <span class="links_name">Gudang</span>
           </a>
          </li>

          <li>
            <a href="/barang">
                <i class="bx bx-box"></i>
                <span class="links_name">Barang</span>
             </a>
            </li>

          <li>
          <a href="/produksi" class="sub-btn">
          <i class="bx bx-box dropdown"></i>
          <span class="links_name">Produksi</span>
        </a>
         </li>

         <li> 
          <a href="/pegawai">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Pegawai</span>
       </a>
      </li>

         <li> 
             <a href="/outlet">
             <i class="bx bx-list-ul"></i>
             <span class="links_name">Oulet</span>
          </a>
         </li>

         <li> 
          <a href="/stok">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Stok</span>
       </a>
      </li>

      <li> 
        <a href="/biaya">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Biaya</span>
     </a>
    </li>

    <li> 
      <a href="/tenaga">
      <i class="bx bx-list-ul"></i>
      <span class="links_name">Tenaga</span>
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
    @yield('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> --}}
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

