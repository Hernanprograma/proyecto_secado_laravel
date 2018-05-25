<div class="col-md-6">


  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Tareas</h4>
      <p class="category">Lista de tareas</p>
    </div>
    <div class="card-content">
      <div class="table-full-width table-tasks">
        <table class="table">
          <tbody>

            <tr>



              @foreach ($tareas as $tarea)
              <tr>
                <td>{{$tarea->descripcion}}
                  @can ('tareas.destroy')
                  <td>
                    <td class="td-actions text-right">
                      <div class="table-icons">

                        {!!Form::open(['route'=>['tareas.destroy',$tarea->id], 'method'=>'DELETE'])!!}
                        <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                    </td>


                    </div>

                    @endcan


                    @endforeach

                  </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer">
      <hr>
      <div class="stats">
        <i class="fa fa-history"></i> Updated 3 minutes ago
      </div>
    </div>
  </div>
</div>
