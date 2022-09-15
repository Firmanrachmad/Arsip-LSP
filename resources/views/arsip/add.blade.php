@extends('layouts.template')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Arsip Surat >> Unggah</h1>
   <p class="mb-2">Unggah surat yang telah terbit di form ini untuk diarsipkan.</p>
   <p class="mb-2">Catatan:</p>
   <p class="mb-4">- Gunakan file berformat PDF</p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="col-lg-12">
            <form method="post" action="store" class="mb-5" enctype="multipart/form-data">
               @csrf
               <div class="ml-4 row">
                  <label for="nomor" class="col-sm-4 col-form-label font-perfect" >Nomor Surat</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control form-rounded" name="nomor" required>
                  </div>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="kategori" class="col-sm-4 col-form-label font-perfect">Kategori</label>
                  <select name="kategori" class="form-select">
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                 </select>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="judul" class="col-sm-4 col-form-label font-perfect">Judul</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control form-rounded" name="judul" required>
                  </div>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="dokumen" class="col-sm-4 col-form-label">File surat/PDF</label>
                  <div class="col-sm-4">
                     <input type="file" class="form-control" name="dokumen" required>
                  </div>
               </div>
               <br>
               <br>
               <div class="row-auto">
            <a href="arsip" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
            </a>
            <button type="submit" class="btn btn-success">Submit</button>
         </div>
            </form>
         </div>
         
      </div>
   </div>
</div>

@endsection