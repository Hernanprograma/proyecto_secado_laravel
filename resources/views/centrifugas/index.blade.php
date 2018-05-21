@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Centrífugas
          @can ('centrifugas.create')
          <a href="{{route('centrifugas.create')}}" class="btn-sm btn-primary pull-right">
                    Crear
                  </a>


          @endcan

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Centrífuga</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Entrada </th>
                <th>Salida</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($centrifugas as $centrifuga)
              <tr>
                <td>{{$centrifuga->id}}</td>
                <td>{{$centrifuga->centrifuga}}</td>
                <td>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</td></td>
                <td>{{$centrifuga->hora}}</td>
                <td>{{$centrifuga->entrada}}</td>
                <td>{{$centrifuga->salida}}</td>
                @can ('centrifugas.show')
                <td width="10px">
                  <a href="{{ route('centrifugas.show', $centrifuga->id) }}" class="btn btn-sm btn-default">Ver</a>
                </td>
                @endcan

                @can ('centrifugas.edit')
                <td width="10px">
                  <a href="{{ route('centrifugas.edit', $centrifuga->id) }}" class="btn btn-sm btn-info">Editar</a>
                </td>
                @endcan

                @can ('centrifugas.destroy')
                <td width="10px">
                  {!!Form::open(['route'=>['centrifugas.destroy',$centrifuga->id], 'method'=>'DELETE'])!!}
                  <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                </td>
                @endcan

              </tr>
              @endforeach


            </tbody>



          </table>
          {{$centrifugas->render()}}


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
