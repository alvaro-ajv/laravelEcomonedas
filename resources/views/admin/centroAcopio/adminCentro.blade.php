@extends('layouts.master')
@section('titulo','Centros Acopio')
@section('margen','margin-top:100px')
@section('index')

@endsection
@section('contenido')

  <div class="row">
    <div class="col-md-12 ml-3 mr-auto">
      <h2 class="title">Administracion de Centros de Acopio</h2>

    </div>
  </div>
<hr>
<div style="margin-bottom:20px">
  <a href="{{ route('admin.createCentro') }}" class="btn btn-success">Nuevo</a>
</div>
<div class="table-responsive">

  <table id="dataTables" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Provincia</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($centros as $centro)
        <tr>
          <td>{{ $centro->nombre }}</td>
          <td>{{$centro->direccion}}</td>
          <td>{{$centro->provincia->nombre}}</td>
          <td class="text-center"><a href="{{ route('admin.editCentro',['id'=>$centro->id]) }}" class="btn btn-info btn-sm ">Editar</a></td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
