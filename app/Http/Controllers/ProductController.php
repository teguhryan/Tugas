<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $getProduk = Product::all();
        return view('produk.index', compact('getProduk'));
    }
    
    public function destroy($id)
    {
        $getProduk = Product::find($id);
        $getProduk->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('produk.tambah_produk');
    }
    
    public function store(Request $request)
    {
        // eloquent (gaperlu model)
            $produk = new Product();
            $produk->name = $request->nama_produk;
            $produk->description = $request->diskripsi;
            $produk->stock = $request->jumlah;
            $produk->price = $request->harga;
            $produk->save();
            return redirect()->back();

        //mess assigment (tambahan di model produk($fillable))
            // Product::create($request->all());
            // return redirect()->back();
    }

    public function edit($id)
    {
        $getProduk = Product::find($id);
        return view('produk.edit_produk',[
            'getProduk' => $getProduk,
        ]);
    }

    public function update($id,Request $request)
    {
       $produk = Product::find($id);
       $produk->name = $request->nama_produk;
       $produk->description = $request->diskripsi;
       $produk->stock = $request->jumlah;
       $produk->price = $request->harga;
       $produk->save();
       return redirect()->route('produk');
    }

}
