@extends('layouts.template')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Arsip Surat</h1>
   <p class="mb-2">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
   <p class="mb-4">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>Nomor Surat</th>
                     <th>Kategori</th>
                     <th>Judul</th>
                     <th>Waktu Pengarsipan</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
               @php $i=1 @endphp
			      @foreach($arsip as $a)
                  <tr>
                     <td>{{$a->nomor}}</td>
                     <td>{{$a->kategori}}</td>
                     <td>{{$a->judul}}</td>
                     <td>{{$a->created_at}}</td>
                     <td>
                        <a class="btn btn-danger" href="#">Hapus</a>
                        <a class="btn btn-warning" href="#">Unduh</a>
                        <a class="btn btn-primary" href="#">Lihat >></a>
                     </td>
                  </tr>
               @endforeach   
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <a href="add" class="btn btn-success btn-icon-split">
   <span class="icon text-white-50">
   <i class="fas fa-arrow-right"></i>
   </span>
   <span class="text">Arsipkan Surat</span>
   </a>
</div>
<!-- /.container-fluid -->
@endsection