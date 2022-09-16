<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Response;
use App\Models\Arsip;
use Storage;
use DB;

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

    public function show($id)
    {
        $arsip = Arsip::find($id);
        return view('arsip.lihat',['arsip'=>$arsip]);
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

        return redirect('arsip')->with('success','Arsip telah diupdate.');
    }

    public function destroy($id)
    {
        $arsip = Arsip::find($id);
        $arsip->delete();
        return redirect('arsip');
    }

    public function download($id)
    {
        $pdf = DB::table('arsips')->where('id', $id)->value('dokumen');

        $file = public_path(). "\storage\document/".$pdf;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $pdf, $headers);
    }

    public function backToPreviousURL(){
        return Redirect::to(url()->previous());
    }
}
