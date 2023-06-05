@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Bahan Baku</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Bahan Baku</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Stok Bakso </th>
           <th style="width: 20%">ID Produksi</th>
           <th style="width: 20%">ID Gudang</th>
           <th style="width: 20%">Jumlah Stok</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>PP111</td>
            <td>ACP12</td>
            <td>F001</td>
            <td>2000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>PP222</td>
            <td>ACP13</td>
            <td>F002</td>
            <td>1000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>PP333</td>
            <td>ACP14</td>
            <td>F003</td>
            <td>3000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>PP444</td>
         <td>ACP15</td>
         <td>F004</td>
         <td>1000</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection