<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;

class ArsipController extends Controller
{
    public function index()
    {
        $arsip = Arsip::all();
        return view('arsip.index', compact('arsip'));
    }

    public function create()
    {
        return view('arsip.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
			'dokumen' => 'mimes:pdf',
        ]);
        
        $file = $request->file('dokumen');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/document', $fileName);

        Arsip::create([
            'nomor' => $request->nomor,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'dokumen' => $fileName
        ]);
        return redirect('arsip')->with('success','Data berhasil disimpan.');
    }

    public function show(Arsip $arsip)
    {
        return view('arsip.show',compact('arsip'));
    }

    public function edit(Arsip $arsip)
    {
        return view('arsip.edit',compact('arsip'));
    }

    public function update(Request $request, Arsip $arsip)
    {
        $request->validate([
            'nomor' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'dokumen' => 'mimes:pdf'
        ]);
        
        $arsip->fill($request->post())->save();

        return redirect()->route('arsip.index')->with('success','Arsip telah diupdate.');
    }

    public function destroy(Arsip $arsip)
    {
        $arsip->delete();
        return redirect()->route('arsip.index')->with('success','Arsip telah dihapus.');
    }
}
