<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Http\Requests\StoreSaranRequest;
use App\Http\Requests\UpdateSaranRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SaranController extends Controller
{
    public function index(){
        $saran = Saran::get()->all();        
        return view('admin.saran', compact('saran'));
    }

    public function index_addSaran(){
        return view('customer.contact');
    }
    public function store_saran(Request $request){  
        // dd($request->all());      
        $request->validate([
            'nama' => 'required',
            'nomortelepon' => 'required',
            'saran' => 'required',
        ]);
        $saran = new Saran;
        $saran->nama = $request->nama;
        $saran->nomortelepon = $request->nomortelepon;
        $saran->saran = $request->saran;
        $saran->save();
        return redirect('contact')->with('success', 'Kritik & Saran Berhasil Dikirimkan');
    }
}
