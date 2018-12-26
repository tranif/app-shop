@extends('layouts.app')

@section('body-class','signup-page')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('register') }}">

            {{ csrf_field() }}
              <div class="card-header card-header-primary text-center">

                <h4 class="card-title">REGISTRO DE CUENTA</h4>

                <!-- <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div> -->
              </div>
              <p class="description text-center">Completa tus datos</p>
              <div class="card-body">

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input id="name" placeholder="Nombre Completo..." type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input id="email" placeholder="Correo Electrónico..." type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña...">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña...">
                </div>

              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">GRABAR REGISTRO</a>
                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a> -->
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
