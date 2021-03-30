<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $barangs = Barang::all();
        // $posts = Barang::orderBy('Id', 'desc')->paginate(6);
        // return view('barangs.index', compact('barangs'));
        // with('i', (request()->input('page', 1) - 1) * 5);
        if($request->has('cari')){
            $cari = $request->cari;
            $barangs = Barang::where('Kode', 'like', '%'.$cari.'%')
                ->orWhere('Nama', 'like', '%'.$cari.'%')
                ->orWhere('Kategori', 'like', '%'.$cari.'%')
                ->paginate(5);
        } else {
            $barang = Barang::paginate(5);
        } 
        return view('barangs.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //melakukan validasi data
                $request->validate([
                    'Id' => 'required',
                    'Kode' => 'required',
                    'Nama' => 'required',
                    'Kategori' => 'required',
                    'Harga' => 'required',
                    'Qty' => 'required',
                    ]);
            
                    //fungsi eloquent untuk menambah data
                    Barang::create($request->all());
            
                    //jika data berhasil ditambahkan, akan kembali ke halaman utama
                    return redirect()->route('barangs.index')
                        ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Id Barang
        $Barang = Barang::find($Id);
        return view('barangs.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $Barang = Barang::find($Id);
        return view('barangs.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        $request->validate([
            'Id' => 'required',
            'Kode' => 'required',
            'Nama' => 'required',
            'Kategori' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
            ]);
        //untuk mengupdate data inputan
        Barang::find($Id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('barangs.index')
        ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //untuk menghapus data
       Barang::find($Id)->delete();
       return redirect()->route('barangs.index')
            -> with('success', 'Barang Berhasil Dihapus');
   }
}
