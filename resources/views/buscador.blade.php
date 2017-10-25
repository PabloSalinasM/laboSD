@extends('adm')
@section('contenido')

 <div class="row">
   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    @include('search')
   <h3>Listado de busqueda</h3> <!--<a href="administrador/create"><button>Nuevo</button></a></h3>-->
   
   </div>

 </div>

 <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">

      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          
          <th> ID </th>
          <th> Nombre </th>
          <th> NombreTitulo </th> 
          <th> Email</th>
          <th> Dia de ingreso </th>
      
        </thead>

        @foreach($buscador as $bus)

        <tr>
          <td>{{$bus->userid}}</td>
          <td>{{$bus->username}}</td>
          <td>{{$bus->usertitle}}</td>
          <td>{{$bus->email}}</td>
          <td>{{$bus->passworddate}}</td>
        </tr>

        @endforeach

      </table>
    </div>
    {{$buscador->render()}}
   </div>

 </div>
@endsection