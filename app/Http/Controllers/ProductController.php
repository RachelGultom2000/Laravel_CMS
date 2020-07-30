<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = \App\Product::all();
        $data = ['products'=>$products];

        return view('admin/product/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        //
        $rules =[
            'name'=>'required',
            'price'=>'required|integer',
            'imageFile'=>'required|mimes:jpg,png,jpeg,JPG',
            'description'=>'required'
        ];
 
        $pesan=[
            'name.required'=>'Nama Barang Tidak Boleh Kosong',
            'price.required'=>'Harga Barang Tidak Boleh Kosong',
            'imageFile.required'=>'Gambar Tidak Boleh Kosong',
            'description.required'=>'Deskripsi Tidak Boleh Kosong'
        ];
 
        $validator=Validator::make(Request()->all(),$rules,$pesan);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('admin/product/create')
            ->withErrors($validator);
 
        }else{
 
            $image=$request->file('imageFile')->store('productImages','public');
             
            $product=new \App\Product;
 
            $product->name=Request()->get('name');
            $product->condition=Request()->get('condition');
            $product->description=Request()->get('description');
            $product->price=Request()->get('price');
            $product->image=$image;
            $product->save();
 
            Session::flash('message','Barang berhasil ditambah');
 
            return Redirect::to('admin/product');
        }
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
        $product = \App\Product::find($id);

        $d = ['product'=>$product];

        return view('admin/product/show')->with($d);
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
        $product = \App\Product::find($id);
        $d = ['product'=>$product];
        return view('admin/product/edit')->with($d);
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
        $rules=[
            'name'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
        ];

        $pesan=[
            'name.required'=>'Nama tidak boleh kosong!',
            'price.required'=>'Harga tidak boleh kosong!',
            'description.required'=>'Deskripsi barang tidak boleh kosong!!',
        ];

        $validator = Validator::make(Request()->all(),$rules,$pesan);
        if($validator->fails()){
            return Redirect::to('admin/product/'.$id.'/edit')
            ->withErrors($validator);
        }else{
            $image = "";
            if(!$request->file('imageFile')){
                $image = Request()->get('imagePath');
            }else{
                $image = $request->file('imageFile')->store('productImages','public');
            }

            $product = \App\Product::find($id);
            $product->name = request()->get('name');
            $product->condition = request()->get('condition');
            $product->price = request()->get('price');
            $product->description = request()->get('description');
            $product->image = $image;
            $product->save();

            Session::flash('message','Data berhasil diubah');

            return Redirect::to('admin/product');
        }
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
        $product = \App\Product::find($id);
        $product->delete();

        Session::flash('message','Barang berhasil dihapus');
        return Redirect::to('admin/product');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $product = DB::table('products')
        ->where('name','like',"%".$cari."%");
 
         return view('admin',['product' => $product]);
    }
}
