<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Paket_data;
use App\Models\Kategori;
class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard';
        $data = Paket_data::orderBy('created_at', 'desc')->Paginate(20)->withQueryString();
        return view('admin.index', compact(['title','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data';
        $category = Kategori::all();
        return view('admin.create', compact(['title','category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'image'         => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'nama'          => 'required',     
            'kecepatan'     => 'required',     
            'kategori_id'   => 'required',
            'harga'         => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->route("paket.create")->withErrors($validator)->withInput();
        }
        
        if ($request->hasfile('image')) {            
            $image = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('image')->getClientOriginalName());
            $request->file('image')->move(public_path('admin/assets/img'), $image);
            // dd($request->hasfile('image'));
            Paket_data::create([
                    'image'             => $image,
                    'nama'              => $request->nama,     
                    'kecepatan'         => $request->kecepatan,     
                    'kategori_id'       => $request->kategori_id,
                    'harga'             => $request->harga,
                    'harga_pemasangan'  => $request->harga_pemasangan,
                    'label'             => $request->label,
                ]);
            // return redirect()->route('paket.create')->with('success','Berhasil menyimpan data');
        }else{
            Paket_data::create([
                'nama' => $request->nama,     
                'kecepatan' => $request->kecepatan,     
                'kategori_id' => $request->kategori_id,
                'harga' => $request->harga,
                'harga_pemasangan' => $request->harga_pemasangan,
                'label' => $request->label,
            ]);
        }
        return redirect()->route('paket.index')->with('success','Berhasil menyimpan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Paket_data::find($id);
        $title = 'Detail Paket';
        return view('admin.show',compact(['data','title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Paket_data::find($id);
        $category = Kategori::all();
        $title = 'Edit Paket';
        return view('admin.edit',compact(['data','title','category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $paket_data = Paket_data::find($id);
        $this->validate($request, [
            'image'         => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'nama'          => 'required',     
            'kecepatan'     => 'required',     
            'kategori_id'   => 'required',
            'harga'         => 'required'
        ]);

        if ($request->hasFile('image')) {
            //upload image baru
            $image = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('image')->getClientOriginalName());
            $request->file('image')->move(public_path('admin/assets/img'), $image);

            //delete image lama
            Storage::delete('admin/assets/img'.$image);

            //update data
            
            $paket_data->update([
                'image'             => $image,
                'nama'              => $request->nama,     
                'kecepatan'         => $request->kecepatan,     
                'kategori_id'       => $request->kategori_id,
                'harga'             => $request->harga,
                'harga_pemasangan'  => $request->harga_pemasangan,
                'label'             => $request->label,
            ]);
            // return redirect()->route('paket.index')->with(['success' => 'Data berhasil diubah!']); 

        }
        else { //jika tidak ada gambar yang ditemukan
            // dd($request->nama);
            $paket_data->update([
                    'nama'              => $request->nama,     
                    'kecepatan'         => $request->kecepatan,     
                    'kategori_id'       => $request->kategori_id,
                    'harga'             => $request->harga,
                    'harga_pemasangan'  => $request->harga_pemasangan,
                    'label'             => $request->label,
            ]);     
            return redirect()->route('paket.index')->with(['success' => 'Data berhasil diubah!']); 
        }
        //setelah melakukan update kembali ke index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket_data = Paket_data::find($id);
        $paket_data->delete();
        return redirect()->route('paket.index')->with(['success' => 'Data berhasil dihapus..']);
    }
}
