@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Produksi</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Produksi Bakso</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Produksi</th>
           <th style="width: 20%">ID Barang</th>
           <th style="width: 20%">ID Biaya Produksi</th>
           <th style="width: 20%">Jumlah Produksi</th>
           <th style="width: 20%">Tanggal Produksi</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>ACP12</td>
            <td>A0012</td>
            <td>AA001</td>
            <td>1000</td>
            <td>04-10-2021</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>ACP13</td>
            <td>A0013</td>
            <td>AA002</td>
            <td>2000</td>
            <td>04-10-2021</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>ACP14</td>
            <td>A0014</td>
            <td>AA003</td>
            <td>1500</td>
            <td>04-10-2021</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>ACP15</td>
         <td>A0015</td>
         <td>AA004</td>
         <td>3000</td>
         <td>04-10-2021</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection