<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));    // listado
    }

    public function create()
    {
        return view('admin.products.create');    // formulario de registro
    }

    public function store(Request $request) // almacena registro en BD
    {
        // validación de datos
        $messages = [
            'name.required'=>'Es requerido ingresar un nombre de producto',
            'name.min'=>'El nombre de producto debe tener al menos 3 caracteres',
            'description.required'=>'Es requerido ingresar una descripcion de producto',
            'description.max'=>'La descripcion de producto no puede superar los 200 caracteres',
            'price.required'=>'Es requerido ingresar un precio de producto',
            'price.numeric'=>'El precio de producto debe ser numerico',
            'price.min'=>'El precio de producto no puede ser 0',
        ];
        $rules = [
            'name'=>'required|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0',
        ];

        $this->validate($request,$rules,$messages);

        // persistencia BD
        $product = new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        
        $product->save();

        // redirección a lista de productos
        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));    // formulario de "edición" de registro
    }

    public function update(Request $request, $id) // almacena registro "editado" en BD
    {
        // validación de datos
        $messages = [
            'name.required'=>'Es requerido ingresar un nombre de producto',
            'name.min'=>'El nombre de producto debe tener al menos 3 caracteres',
            'description.required'=>'Es requerido ingresar una descripcion de producto',
            'description.max'=>'La descripcion de producto no puede superar los 200 caracteres',
            'price.required'=>'Es requerido ingresar un precio de producto',
            'price.numeric'=>'El precio de producto debe ser numerico',
            'price.min'=>'El precio de producto no puede ser 0',
        ];
        $rules = [
            'name'=>'required|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0',
        ];

        $this->validate($request,$rules,$messages);
        
        $product = Product::find($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        
        $product->save();

        // redirección a lista de productos
        return redirect('/admin/products');
    }

    public function destroy($id) // elimina registra de la BD
    {
        $product = Product::find($id);
        $product->delete();

        // redirección a lista de productos
        return back();
    }
}
