<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ViewProduk()
    {
        $produk = Produk::all(); //mengambil semuadata di table produk
        return view('produk', ['produk' => $produk]); //menampilkan view dari produk.blade.php dengan membawa variabel $produk
    }

    public function CreateProduk(Request $request)
    {
        //menambahkan variabel $filepath untuk mendefenisikan penyimpanan file
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() .'_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images',$imageName); //Store image in the'storage/app/public
        }
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk
        ]);
        return redirect('/produk');
    }

    public function ViewAddproduk()
    {
        return view('addproduk'); //menampilkan view dari addproduk.blade.php
    }

    public function DeleteProduk($kode_produk)
    {
        produk::where('kode_produk', $kode_produk)->delete(); //find the record by ID

        //Redirect back to  the  index page  with a success message
        return redirect('/produk');
    }

    //Fungsi untuk view edit produk
    public function ViewEditProduk($kode_produk)
    {
        $ubahproduk = produk::where('kode_produk', $kode_produk)->first();

        return view('editproduk', compact('ubahproduk'));
    }
    //Fungsi menambah data produk
    public function UpdateProduk(Request $request,$kode_produk)
    {
        //menambahkan variabel $filePath untuk mendefinisikan penyimpanan file
        $imageName = null;
        if ($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time() .'_' . $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName); //store imagein the 'storage/app/public
        }
        Produk::where('kode_produk',$kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imageName
        ]);
        return redirect('/produk');
    }
}
