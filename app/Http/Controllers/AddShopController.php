<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AddShopController extends Controller
{
    
    public function index(){
        $shop = Shop::get()->all();        
        return view('admin.shop', compact('shop'));
    }

    public function edit($id){
        $data = Shop::find($id);
        return view('admin.addshop', compact('data'));
    }
    public function store(Request $request){        
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        $shop = new Shop;
        $shop->nama = $request->nama;
        $shop->harga = $request->harga;
        $shop->stok = $request->stok;
        $image = $request->file('gambar');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $shop->gambar = $name;
        $shop->save();
        return redirect('/admin/shop')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function create(){
        return view('admin.addshop', ['data' => new Shop]);
    }

    public function update(Request $request, $id){
        $validators = Validator::make($request->all(), [
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        $shop = Shop::find($id);
        $shop->nama = $request->nama;
        $shop->harga = $request->harga;
        $shop->stok = $request->stok;
        if ($request->hasFile('gambar')) {
            unlink(public_path('/images' . $shop->gambar));
            $file = $request->file('gambar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('/images');           
            $shop->gambar = $fileName;
        }
        $shop->update();
        return redirect('/admin/shop')->with('success', 'Barang berhasil diedit');
    }

    public function destroy($id){
        $shop = Shop::find($id);        
        $shop->delete();

        return redirect('/admin/shop')->with('error', 'Berhasil Dihapus');
    }

}
