@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Barang</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Barang Bakso</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Barang</th>
           <th style="width: 20%">ID Jenis Bakso</th>
           <th style="width: 20%">Nama Bakso</th>
           <th style="width: 20%">Harga Bakso</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>A0012</td>
            <td>J12001</td>
            <td>Bakso beranak</td>
            <td>10.000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>A0013</td>
            <td>J12002</td>
            <td>Bakso mercon</td>
            <td>15.000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>A0014</td>
            <td>J12003</td>
            <td>Bakso jamur</td>
            <td>10.000</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>A0015</td>
         <td>J12004</td>
         <td>Bakso mozarela</td>
         <td>20.000</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection