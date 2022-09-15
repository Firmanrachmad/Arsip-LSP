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
            <form method="post" action="#" class="mb-5" enctype="multipart/form-data">
               @csrf
               <div class="ml-4 row">
                  <label for="inputText" class="col-sm-4 col-form-label font-perfect" >Nomor Surat</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control form-rounded" id="inputText" required>
                  </div>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="inputText" class="col-sm-4 col-form-label font-perfect">Kategori</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control form-rounded" id="inputText" required>
                  </div>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="inputText" class="col-sm-4 col-form-label font-perfect">Judul</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control form-rounded" id="inputText" required>
                  </div>
               </div>
               <br>
               <div class="ml-4 row">
                  <label for="inputText" class="col-sm-4 col-form-label font-perfect">File surat/PDF</label>
                  <div class="col-sm-4">
                     <input type="file" class="form-control" required>
                  </div>
               </div>
            </form>
         </div>
         <div class="row-auto">
            <a href="arsip" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
            </a>
            <a href="add" class="btn btn-success">
            <span class="icon text-white-50">
            </span>
            <span class="text">Simpan</span>
            </a>
         </div>
      </div>
   </div>
</div>

@endsection