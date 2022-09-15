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
                    <tr>
                        <td>asdasd</td>
                        <td>asdasdas</td>
                        <td>asdasdasd</td>
                        <td>2011/04/25</td>
                        <td>action</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection