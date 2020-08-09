<?php

namespace App\Http\Controllers;
use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kontak::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Kontak ;
        $data->nama = $request->nama ;
        $data->email = $request->email;
        $data->save();

        return "Berhasil Menambahkan Kontak !";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Kontak::all();

        if ( == $id) {
          // code...
          return Kontak::find($id);
        }else{
          return "Tidak ada data yang ditampilkan";
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama  = $request->nama;
        $email = $request->email;

        $data = Kontak::find($id);
        $data->nama  = $nama;
        $data->email = $email;
        $data->save();

        return "Berhasil Mengperbahrui Kontak !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kontak::find($id);
        $data->delete();
        return "Berhasil menghapus kontak !";
    }
}
