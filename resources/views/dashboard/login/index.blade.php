@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Biaya</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Biaya Produksi</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Biaya Produksi </th>
           <th style="width: 20%">ID Bahan Baku</th>
           <th style="width: 20%">ID Tenaga Kerja</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>AA001</td>
            <td>00120</td>
            <td>PP001</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>AA002</td>
            <td>00121</td>
            <td>PP002</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>AA003</td>
            <td>00122</td>
            <td>PP003</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>AA004</td>
            <td>00123</td>
            <td>PP004</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection