@extends('layouts.master')
@section('titulo','Pagina Principal')
@section('claseTransparente','navbar-transparent navbar-color-on-scroll ')
@section('index')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/mundo.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Your Story Starts With Us.</h1>
          <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fas fa-play"></i> Watch video
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('contenido')
  <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Let&apos;s talk product</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Materiales Aceptados</h2>
        <div class="team">
          <!--Inicio multislider-->
            <div class="">
              <div id="mixedSlider">
                <div class="MS-content">
                  @foreach ($materiales as $material)
                    <div class="item">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-raised rounded-circle img-fluid" style="border:4px solid {{ $material->color }}" src="{{ url('imgMateriales/'.$material->imagen) }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $material->nombre }}</h5>
                          <p class="card-text">Precio en ecomonedas: {{ $material->precio }}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  @foreach ($materiales as $material)
                    <div class="item">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-raised rounded-circle img-fluid" style="border:4px solid {{ $material->color }}" src="{{ url('imgMateriales/'.$material->imagen) }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $material->nombre }}</h5>
                          <p class="card-text">Precio en ecomonedas: {{ $material->precio }}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach

                </div>
                <div class="MS-controls">
                  <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                  <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
              </div>
              <!--Fin multislider-->

            </div>

          </div>


        </div>


      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Work with us</h2>
            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection
