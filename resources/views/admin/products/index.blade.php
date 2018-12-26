@extends('layouts.app')

@section('title','Listado de Productos');

@section('body-class', 'profile-page sidebar-collapse')

@section('content')
    
  </div>
  <div class="main main-raised">
    <div class="container">
      
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <a href="{{url('admin/products/create')}}" class="btn btn-info mt-3">Agregar Producto</a>
        <div class="team">
          <div class="row">
            <!-- Inicio Tabla Productos -->
            <table class="table mt-3">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Categoría</th>
                      <th class="text-right">Precio</th>
                      <th class="text-right">Opciones</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product)

                  <tr>
                      <td class="text-center">{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->description}}</td>
                      <td class="text-center">{{$product->category ? $product->category->name : 'General'}}</td>
                      <td class="text-right">&euro;{{$product->price}}</td>
                      <td class="td-actions text-right">
                          
                          <form action="{{url('/admin/products/'.$product->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="#" rel="tooltip" title="Ver Producto">
                              <i class="fa fa-info"></i>
                            </a>
                            &nbsp;
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto">
                                <i class="fa fa-edit"></i>
                            </a>
                            &nbsp;
                            <button type="submit" class="btn btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                          </form>
                      </td>
                  </tr>
                  
              @endforeach
            </tbody>
          </table>
          <!-- Fin Tabla Productos -->
          {{$products->links("pagination::bootstrap-4")}}
          </div>
          
        </div>
      </div>
      
    </div>
  </div>

@endsection
