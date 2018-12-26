@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Bienvenido a AppShop.</h1>
          <h4>Realice sus pedidos en línea y lo contactamos para coordinar la entrega en su domicilio en forma <b>rápida y segura</b>.</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> ¿Cómo Funciona?
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">¿Porqué AppShop?</h2>
            <h5 class="description">Puedes revisar nuestra relación cmpleta de productos, comparar precios y realizar tus pedidos cuando estés seguro. Estamos atentos a todas tus dudas y consultas.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Atendemos tus dudas</h4>
                <p>Atendemos rapidamente cualquier consulta que tengas vía chat. No estás solo, sino que siempre estamos atentos a tus inquietudes.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Pago Seguro</h4>
                <p>Todos los pedidos que realice serán confirmados con una llamada. Sino confía en las operaciones en linea, pueda abonar al momento de la entrega.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Información Privada</h4>
                <p>Los pedidos que realices solo los conocerás tu a través de tu panel de cliente. Nadie más tiene acceso a tu información.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Productos disponibles</h2>
        <div class="team">
          <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="team-player">
                    <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="{{$product->images()->first()->image}}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">{{$product->name}}
                        <br>
                        <small class="card-description text-muted">{{$product->category->name}}</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">{{$product->description}}
                                <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>    
                </div>
            </div>
            
            @endforeach
          </div>
          
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">¿Aún no te has registrado?</h2>
            <h4 class="text-center description">Registrate ingresando tus datos personales y podrás realizar pedidos a través de tu carrito de compras de forma segura. Con tu cuenta de usuario podrás realizar todas tus consultas en forma rápida y segura.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tu Nombre Completo</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tu Correo Electrónico</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Tu Mensaje</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Enviar Consulta
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
