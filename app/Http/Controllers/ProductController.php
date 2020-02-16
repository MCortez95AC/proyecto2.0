<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use App\Area;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $area = Area::find(1);
        $products = $area->products()->get();
        /* return $products; */
        return view('managers.generalManager.areaManager.restaurant.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('managers.generalManager.areaManager.restaurant.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request){

        if ($request->hasFile('image')) {
            $file =$request->file('image');
            $fileName = time().$file->getClientOriginalName(); //le concat la hora a la imagen para crear el nombre
            $file->move(public_path().'/images/',$fileName); //guardamos la imagen el la carpeta images en public

        }else return 'falla';
        $product = new Product();

        $product->area_id = 1; //Default restaurant area ID
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category = 'food';
        $product->image = $fileName;
        $product->save();

        return redirect()->route('products.index')->with('info','Carrera creada exitosamente');
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
