<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JudulTA;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        return view('dashboards.admins.index');
    }
    function profile(){
        return view('dashboards.admins.profile');
    }
    function settings(){
        return view('dashboards.admins.settings');
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

        return redirect()->route('admin.profile');
    }
}
