<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JudulTA;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        return view('dashboards.users.index');
    }
    function profile(){
        return view('dashboards.users.profile');
    }
    function settings(){
        return view('dashboards.users.settings');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
       $user = Auth::user();
    
        // dd($user);
        
        $user->link_telegram = $request->link_telegram;
        
        $user->save();

        $judulta = JudulTA::find($user->judul_t_a_id);
        $judulta->nama_judul = $request->nama_judul;

        $judulta->save();
    
        return redirect()->route('user.profile');
    }
}
