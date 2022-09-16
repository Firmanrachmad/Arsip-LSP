@extends('layouts.template')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Arsip Surat >> Lihat</h1>
   <p class="mb-2">Nomor Surat : {{$arsip->nomor}}</p>
   <p class="mb-2">Kategori : {{$arsip->kategori}}</p>
   <p class="mb-2">Judul : {{$arsip->judul}}</p>
   <p class="mb-4">Waktu Unggah :{{$arsip->created_at}}</p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-body">
        <iframe src="\storage\document/{{$arsip->dokumen}}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>
      </div>
   </div>
   <a href="{{ URL::previous() }}" class="btn btn-warning btn-icon-split">
   <span class="icon text-white-50">
   <i class="fas fa-arrow-left"></i>
   </span>
   <span class="text">Kembali</span>
   </a>
   <a href="download/{{$arsip->id}}" class="btn btn-dark">
   <span class="icon text-white-50">
   </span>
   <span class="text">Unduh</span>
   </a>
   <a href="download/{{$arsip->id}}" class="btn btn-primary">
   <span class="icon text-white-50">
   </span>
   <span class="text">Edit/Ganti File</span>
   </a>
</div>
<!-- /.container-fluid -->
@endsection