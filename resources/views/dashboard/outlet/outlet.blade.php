@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Outlet</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Outlet</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Outlet </th>
           <th style="width: 20%">ID Pegawai </th>
           <th style="width: 20%">ID Barang </th>
           <th>Nama Outlet</th>
           <th style="width: 20%">Lokasi Outlet</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>FA012</td>
            <td>123AB</td>
            <td>A0012</td>
            <td>Betooserba</td>
            <td>Jogja</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>FA013</td>
            <td>124AB</td>
            <td>A0013</td>
            <td>Mart red</td>
            <td>Jakarta</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>FA014</td>
            <td>125AB</td>
            <td>A0014</td>
            <td>Cityshop</td>
            <td>Surabaya</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>FA0015</td>
         <td>126AB</td>
         <td>A0015</td>
         <td>Loveshop</td>
         <td>Malang</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection