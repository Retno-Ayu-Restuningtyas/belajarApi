<?php

namespace App\Http\Controllers;

use App\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriBerita=KategoriBerita::all();

        return $kategoriBerita;

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $kategoriBerita=KategoriBerita::create($input);
  
        return $kategoriBerita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriBerita=KategoriBerita::find($id);

        return $kategoriBerita;
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
        $input=$request->all();

        return $input;

        $berita=Berita::find($id);

        if(empty($berita)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $berita->update($input);
        return response()->json($berita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriBerita=KategoriBerita::find($id);

        if(empty($kategoriBerita)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $kategoriBeritas->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
