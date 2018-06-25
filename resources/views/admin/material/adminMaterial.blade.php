@extends('layouts.master')
@section('titulo','Materiales')
@section('margen','margin-top:100px')
@section('index')

@endsection
@section('contenido')

  <div class="row">
    <div class="col-md-12 ml-3 mr-auto">
      <h2 class="title">Administracion de Materiales</h2>

    </div>
  </div>
<hr>
<div style="margin-bottom:20px">
  <a href="{{ route('admin.createMaterial') }}" class="btn btn-success">Nuevo</a>
</div>
<div class="table-responsive">

  <table id="dataTables" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Color</th>
        <th>Imagen</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($materiales as $material)
        <tr>
          <td>{{$material->nombre }}</td>
          <td>{{$material->precio}}</td>
          <td> <div class="cuadro" style="background:{{$material->color}}">

          </div> </td>
          <td> <img width="100px" height="110px" src="{{url('imgMateriales/'.$material->imagen)}}" alt="Imagen" ></td>
          <td class="text-center"><a href="{{ route('admin.editMaterial',['id'=>$material->id]) }}" class="btn btn-info btn-sm ">Editar</a></td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
