@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Jenis Bakso</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Jenis Bakso</h3>
     {{-- <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a> 
        <a href="#" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak Data</a>
     </button> --}}

     <button type="button" class="btn btn-tambah">
      <a href="#">Tambah Data</a>
     </button>

     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID </th>
           <th>Nama Gudang</th>
           <th style="width: 20%">Lokasi</th>
           <th style="width: 20%">Stok Bakso</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>Fahrozi</td>
            <td>Nastar</td>
            <td>10000</td>
            <td>04-10-2021</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>Yusuf</td>
            <td>Putri Salju</td>
            <td>6000</td>
            <td>10-01-2023</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>Junaidi</td>
            <td>Nastar</td>
            <td>5000</td>
            <td>23-11-2020</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>Rika</td>
         <td>Pastel</td>
         <td>15000</td>
         <td>12-10-2022</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection