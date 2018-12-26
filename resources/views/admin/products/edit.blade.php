@extends('layouts.app')

@section('title','Editar Producto')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')

  </div>
  <div class="main main-raised">
    <div class="container">
    <div class="row">
      
      <div class="section text-center">
        <h2 class="title">Editar Producto #{{$product->id}}</h2>
        <form action="{{url('/admin/products/'.$product->id.'/edit')}}" method="POST">
          {{csrf_field()}}

          <div>
            <div class="form-group label-floating">
              <label class="control-label">Nombre del Producto</label>
              <input type="text" class="form-control" name="name" value="{{old('name'), $product->name}}">
            </div>
          </div>

          <div>
            <div class="form-group label-floating">
              <label class="control-label">Precio del Producto</label>
              <input type="number" step="0.01" class="form-control" name="price" value="{{old(''price), $product->price}}">
            </div>
          </div>


          <div class="form-group label-floating">
            <label class="control-label">Descripción corta del Producto</label>
            <input type="text" class="form-control" name="description" value="{{ old('description'), $product->description}}">
          </div>

          <div class="form-group label-floating">
            <label class="control-label">Descripción larga del Producto</label>
            <textarea name="long_description" class="form-control" rows="5">{{ old('long_description'), $product->long_description}}</textarea>
          </div>

          <button class="btn btn-info">Grabar</button>
          <a href="{{url('/admin/products')}}" class="btn btn-danger">Cancelar</a> 

        </form>
      </div>
    </div>
    </div>
  </div>

@endsection
