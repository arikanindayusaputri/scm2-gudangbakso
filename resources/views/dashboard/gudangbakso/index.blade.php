@extends('sidebar1')
@section('content')     
     <section class="home-section">
      <h1>Gudang</h1>
        <nav>
         <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
         </div>
         <div class="profile-details">
            <span class="admin_name">Admin Bakso</span>
         </div>
        </nav>
        <div class="home-content">
         <h3>Gudang Bakso</h3>
         <button type="button" class="btn btn-tambah">
            <a href="">Tambah Data</a>
         </button>
         <button type="button" class="btn btn-tambah">
            <a href="#">Cetak Data</a>
           </button>
         <table class="table-data">
            <thead>
             <tr>
               <th style="width: 20%">ID Gudang Bakso</th>
               <th style="width: 20%">Nama Gudang</th>
               <th style="width: 20%">Lokasi</th>
               <th style="width: 20%">Stok Bakso</th>
               <th>Action</th>
             </tr>
            </thead>
            <tbody>
             <tr>
                <td>F001</td>
                <td>Gudang pengemasan</td>
                <td>Belakang timur</td>
                <td>100</td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
             </tr>
             <td>F002</td>
                <td>Gudang Peracikan</td>
                <td>Depan</td>
                <td>2000</td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
             </tr>
                <td>F003</td>
                <td>Gudang Penggilingan</td>
                <td>Timur</td>
                <td>3000</td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
             </tr>
             <td>F004</td>
             <td>Gudang pengemasan </td>
             <td>Barat</td>
             <td>2000</td>
             <td><a href="">Edit</a> | <a href="">Hapus</a></td>
          </tr>
            </tbody>
         </table>
        </div>
     </section>
 @endsection
 