@extends('layouts.master')
@section('titulo','Material')
@section('margen','margin-top:100px')
@section('index')

@endsection
@section('contenido')
  <div class="row">
    <div class="col-md-12 ml-3 mr-auto">
      <h2 class="title">Crear Material</h2>

    </div>
  </div>
<hr>
<div class="col-md-10 " style="padding-bottom:80px">
  <form action="{{ route('admin.postEditMaterial') }}" method="POST" enctype="multipart/form-data">


  <div class="form-group {{ ($errors->has('nombre')) == true ? ' has-danger bmd-form-group' : '' }}">
    <label for="nombre" >Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $material->nombre }}">
    @if ($errors->has('nombre'))
      <span class="form-control-feedback">
          <i class="material-icons">clear</i>
      </span>
    @endif
    @foreach ($errors->get('nombre') as $error)
        <div class="text-danger">{{ $error }}</div>
    @endforeach
  </div>

  <div class="form-group {{ ($errors->has('precio')) == true ? ' has-danger bmd-form-group' : '' }}">
    <label for="precio" >Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" value="{{ $material->precio }}">
    @if ($errors->has('precio'))
      <span class="form-control-feedback">
          <i class="material-icons">clear</i>
      </span>
    @endif
    @foreach ($errors->get('precio') as $error)
        <div class="text-danger">{{ $error }}</div>
    @endforeach
  </div>

  <div class="form-group {{ ($errors->has('color')) == true ? ' has-danger bmd-form-group' : '' }}">
    <label for="color" >Color</label>
    <input type="text" class="form-control" id="demo1" name="color" readonly style="background-color:{{ $material->color }};" value="{{ $material->color }}">
    @if ($errors->has('color'))
      <span class="form-control-feedback">
          <i class="material-icons">clear</i>
      </span>
    @endif
    @foreach ($errors->get('color') as $error)
        <div class="text-danger">{{ $error }}</div>
    @endforeach
  </div>


  <div class="form-group">

      <input type="file" name="imagen" id="imagen" class="inputfile inputfile-1" value="{{ old('imagen') }}"/>
      <label for="imagen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
        <span style="font-size:15px">Seleccione una imagen&hellip;</span></label>
      @foreach ($errors->get('imagen') as $error)
          <div class="text-danger">{{ $error }}</div>
      @endforeach

  </div>
<input type="hidden" name="id" value="{{ $material->id }}">


  @csrf
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

</div>



@endsection
