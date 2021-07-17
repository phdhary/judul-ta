<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\JudulTA;
use App\Models\User;

class JudulTAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judultas = JudulTA::orderBy('id','DESC')->get();


        
        return view('judulta.index',compact('judultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::orderby('id','ASC')->get();
        $users = User::orderby('name','ASC')->get();
        return view('judulta.create',compact('kategoris','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = Kategori::where('nama', $request->kategori)->first();
        $user = User::where('name', $request->user)->first();

        
        $judulta = new JudulTA;
        $judulta->nama_judul = $request->nama_judul;
        $judulta->deskripsi = $request->deskripsi;
        $judulta->kategori_id = $kategori->id;
        $judulta->user_id = $user->id;
        $judulta->nama_dosen = $request->nama_dosen;
        
        $judulta->save();

        $user->judul_t_a_id = $judulta->id;
        $user->save();

        return redirect()->route('judulta.index');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit ajg";
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
