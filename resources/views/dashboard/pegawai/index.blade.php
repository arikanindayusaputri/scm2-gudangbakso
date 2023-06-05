@extends('sidebar1')
@section('content')
<section class="home-section">
    <h1>Pegawai</h1>
    <nav>
     <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
     </div>
     <div class="profile-details">
        <span class="admin_name">Admin Bakso</span>
     </div>
    </nav>
    <div class="home-content">
     <h3>Pegawai Bakso</h3>
     <button type="button" class="btn btn-tambah">
        <a href="">Tambah Data</a>
     </button>
     <button type="button" class="btn btn-tambah">
      <a href="#">Cetak Data</a>
     </button>
     <table class="table-data">
        <thead>
         <tr>
           <th style="width: 20%">ID Pegawai </th>
           <th>Nama Pegawai</th>
           <th style="width: 20%">Umur</th>
           <th style="width: 20%">No telephone</th>
           <th>Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
            <td>123AB</td>
            <td>Nana</td>
            <td>20</td>
            <td>085676390622</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>124AB</td>
            <td>Caca</td>
            <td>22</td>
            <td>085423689622</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
            <td>125AB</td>
            <td>Ayu</td>
            <td>19</td>
            <td>085689045311</td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
         <td>126AB</td>
         <td>Indra</td>
         <td>25</td>
         <td>085432160911</td>
         <td><a href="">Edit</a> | <a href="">Hapus</a></td>
      </tr>
        </tbody>
     </table>
    </div>
 </section>
@endsection