@extends('layouts.master')
@section('titulo','Centros Acopio')
@section('margen','margin-top:100px')
@section('index')

@endsection
@section('contenido')
  <div class="row">
      <div class="col-md-12 ml-3 mr-auto">
        <h2 class="title">Editar Centro de Acopio</h2>

      </div>
    </div>
  <hr>
  <div class="col-md-10 " style="padding-bottom:80px">
    <form action="{{ route('admin.postEditCentro') }}" method="post">


    <div class="form-group {{ ($errors->has('nombre')) == true ? ' has-danger bmd-form-group' : '' }}">
      <label for="nombre" >Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $centro->nombre }}">
      @if ($errors->has('nombre'))
        <span class="form-control-feedback">
            <i class="material-icons">clear</i>
        </span>
      @endif
      @foreach ($errors->get('nombre') as $error)
          <div class="text-danger">{{ $error }}</div>
      @endforeach
    </div>


    <div class="form-group {{ $errors->has('provincia') == true ? ' has-danger bmd-form-group' : '' }}">
      <label for="provincia">Provincia</label>
      <select class="custom-select" id="provincia" name="provincia">
        @foreach ($provincias as $prov)
          <option value="{{ $prov->id }}" {{ $prov->id == $centro->provincia->id ? 'selected' : ''  }}>{{ $prov->nombre }}</option>
        @endforeach

      </select>
      @foreach ($errors->get('provincia') as $error)
          <div class="text-danger">{{ $error }}</div>
      @endforeach
    </div>


    <div class="form-group {{ $errors->has('direccion') == true ? ' has-danger bmd-form-group' : '' }}" >
      <label for="direccion">Dirección</label>
      <textarea class="form-control" id="direccion" rows="3" name="direccion">{{ $centro->direccion }}</textarea>
      @if ($errors->has('direccion'))
        <span class="form-control-feedback">
            <i class="material-icons">clear</i>
        </span>
      @endif
      @foreach ($errors->get('direccion') as $error)
          <div class="text-danger">{{ $error }}</div>
      @endforeach
    </div>

    <input type="hidden" name="id" value="{{ $centro->id }}">


    @csrf
      <button type="submit" class="btn btn-success">Guardar</button>
  </form>

  </div>



@endsection
