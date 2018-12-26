@extends('layouts.app')

@section('title','Nuevo Producto')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')

  </div>
  <div class="main main-raised">
    <div class="container">
    <div class="row">
      
      <div class="section text-center">
        <h2 class="title">Registrar Nuevo Producto</h2>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif


        <form action="{{url('/admin/products')}}" method="POST">
          {{csrf_field()}}

          <div class="col-sm-6">
            <div class="form-group label-floating">
              <label class="control-label">Nombre del Producto</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group label-floating">
              <label class="control-label">Precio del Producto</label>
              <input type="number" class="form-control" name="price" value="{{old('price')}}">
            </div>
          </div>


          <div class="form-group label-floating">
            <label class="control-label">Descripción corta del Producto</label>
            <input type="text" class="form-control" name="description" value="{{old('description')}}">
          </div>

          <div class="form-group label-floating">
            <label class="control-label">Descripción larga del Producto</label>
            <textarea name="long_description" class="form-control" rows="5">{{old('long_description')}}</textarea>
          </div>

          <button class="btn btn-primary">Grabar Producto</button>

        </form>
      </div>
    </div>
    </div>
  </div>

@endsection
