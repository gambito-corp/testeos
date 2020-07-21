@extends('layouts.app')
@section('content')
<body class="bg-darken-light">
  <!-- Header -->
  <!-- Grid columns slider custom-->
  <div class="container-fluid">
    <div class="row">
      <div class="jumbotron jumbotron-top_container faq">
        <div class="container">
          <!-- <h1 class="font-weight-bold text-light text-uppercase">
              Preguntas <br> frecuentes
          </h1>
        
          <p class="text-light text-capitalize">conoce las bases para realizar una subasta correcta!</p>
          -->
        </div>
      </div>
    </div>
  </div>
  <!-- Container -->
  <div class="container">
    <div class="row">
      <!-- main content -->
      <div class="col-md col-md-12 mt-5">
        <div class="row">
          <!--<div class="col-md-4  t-rform_top_img  d-sm-none d-lg-block">
              </div>-->
          <div class="col-md-3 order-md-1 mb-4   ">
            <div class="text-center">
              <div class="bg-light-card shadow-sm radius">
              <img src="{{asset('/assets/img/image-173.png')}}" class="side-nav-br_50 mt-4" with="" alt="...">
                <div class="card-body pl-0 pr-0">
                  <h5 class="card-title font-weight-bold  side-nav_title-card">Card title</h5>
                  <p class="card-text">email@example.com</p>
                  <p>
                    <span><i class="bg-rating_star fas fa-star"></i></span>
                    <span><i class="bg-rating_star fas fa-star"></i></span>
                    <span><i class="bg-rating_star fas fa-star"></i></span>
                    <span><i class="bg-rating_star fas fa-star  "></i></span>
                    <span><i class="darken-flat fas fa-star"></i></span>
                  </p>
                  <p class="font-weight-bold text-dark">3 pts</p>
                  <hr>
                  <a href=""> editar perfil</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-12   order-md-2 col-xs-12 t-rform_top main-container p-5">
            <h2 class=" font-weight-bold text-dark pb-5 text-center">
              Customer information
            </h2>
            <form>
              <div class="form-row">
                <div class="form-group col-md-4 col-sm-12">
                  <label for="name" class="font-weight-bold text-dark">Nombres</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Apellidos</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Celular</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Correo electronico</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Fecha de nacimiento</label>
                  <input type="date" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">RUC</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Documento de identidad</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="name" class="font-weight-bold text-dark">Contrase&ntilde;a</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="name" class="font-weight-bold text-dark">Pais</label>
                  <select class="form-control" name="" id="">
                    <option value="default ">Country</option>
                    <option value="country"></option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="name" class="font-weight-bold text-dark">Ciudad</label>
                  <select class="form-control" name="" id="">
                    <option class="form-control" value="default">city</option>
                    <option class="form-control" value="country"></option>
                  </select>
                </div>
                <div class="form-group col-md-8">
                  <label for="name" class="font-weight-bold text-dark">Domicilio</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col col-md-4 col-sm-12 bg-light">
                  <div class="media border-bottom mb-5  pb-2 pt-4">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked="">
                      <label class="form-check-label" for="exampleRadios1">
                      </label>
                    </div>
                    <div class="media-body pl-0 pr-0">
                      <h5 class="mt-0">Person juridica</h5>
                      Necesito solo facturación
                    </div>
                  </div>
                  <div class="media ">
                    <div class="input-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                          value="option1" checked="">
                        <label class="form-check-label" for="exampleRadios1">
                        </label>
                      </div>
                      <div class="media-body pb-2">
                        <h5 class="mt-0">Person Natural</h5>
                        Necesito solo Recibo
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col  col-md-4 col-sm-12  mt-sm-4">

                </div>
                <div class="col col-md-4 col-sm-12 mt-sm-4">
                  <form action="/file-upload" class="dropzone dz-clickable" id="an-other-form-element">
                    <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to
                        upload</button></div>
                  </form>
                </div>
              </div>
              <div class="row mx-lg-n5 mt-5">
                <div class="col py-3 ml-5 px-lg-5">
                  <button class="btn btn-block btn-to_buy pl-5 pr-5 text-light rounded-pill">Guardar
                    cambios</button>
                </div>
                <div class="col py-3 px-lg-5">
                  <button class="btn btn-block btn-outline-primary pl-5 pr-5 rounded-pill ">cambiar
                    contrase&ntilde;a</button></div>
              </div>
          </div>
          </form>
        </div>
      </div>
      <div class="col-sm-3">
        <img src="" alt="">
      </div>
    </div>
    <div class="row mb-sm-4">
      <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
          <article>
              <!-- <h2 class="ml-5">Credito vehicular</h2>
              <p class="ml-5">
                  Te ofrecemos asesoria especializada, si eres cliente de
                  totalsubastas contactanos
              </p> -->
              <a href="/">
                  <img src="{{asset('/assets/img/image-368.png')}}" class="img-fluid" alt="" />
              </a>
              <!-- <a href="{{Route('creditos')}}" class="text-light">
                  <button class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
                      Aqu&iacute;
                  </button>
              </a> -->
          </article>
      </div>
  
      <div class="col-md col-12 pt-5 img-focus col-sm-12 col-md-6 col-xs-12 widgets">
          <article>
              <!-- <h2 class="ml-5">Asesoria legal?</h2>
              <p class="ml-5">
                  Te ofrecemos asesoria especializada, si eres cliente de
                  totalsubastas contactanos
              </p> -->
            <img src="{{asset('/assets/img/image-368-1.png')}}" alt="" />
              <!-- <a href="Route{{route('asesoria')}}" class="text-light">
                  <button  class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
                      Aqu&iacute;
                  </button>
              </a> -->
          </article>
      </div>
  </div>

  </div>
  <!-- end row -->
  </div>
@endsection