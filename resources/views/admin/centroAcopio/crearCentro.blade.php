@extends('layouts.master')
@section('titulo','Centros Acopio')
@section('margen','margin-top:100px')
@section('index')

@endsection
@section('contenido')
  <div class="row">
    <div class="col-md-12 ml-3 mr-auto">
      <h2 class="title">Crear Centro de Acopio</h2>

    </div>
  </div>
<hr>
<div class="col-md-10 " style="padding-bottom:80px">
  <form action="{{ route('admin.postCreateCentro') }}" method="post">


  <div class="form-group {{ ($errors->has('nombre')) == true ? ' has-danger bmd-form-group' : '' }}">
    <label for="nombre" >Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
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
      <option value="-1" disabled selected>-- Seleccione una --</option>
      @foreach ($provincias as $prov)
        <option value="{{ $prov->id }}" {{ $prov->id == (old('provincia')) ? 'selected' : ''  }}>{{ $prov->nombre }}</option>
      @endforeach

    </select>
    @foreach ($errors->get('provincia') as $error)
        <div class="text-danger">{{ $error }}</div>
    @endforeach
  </div>


  <div class="form-group {{ $errors->has('direccion') == true ? ' has-danger bmd-form-group' : '' }}" >
    <label for="direccion">Dirección</label>
    <textarea class="form-control" id="direccion" rows="3" name="direccion">{{ old('direccion') }}</textarea>
    @if ($errors->has('direccion'))
      <span class="form-control-feedback">
          <i class="material-icons">clear</i>
      </span>
    @endif
    @foreach ($errors->get('direccion') as $error)
        <div class="text-danger">{{ $error }}</div>
    @endforeach
  </div>


  @csrf
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

</div>


@endsection
