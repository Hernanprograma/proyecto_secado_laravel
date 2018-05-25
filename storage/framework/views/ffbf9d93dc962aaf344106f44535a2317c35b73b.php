<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Tasks</h4>
      <p class="category">Backend development</p>
    </div>
    <div class="card-content">
      <div class="table-full-width table-tasks">
        <table class="table">
          <tbody>

            <tr>
              <td>
                <label class="checkbox">
                                  <input type="checkbox" value="" data-toggle="checkbox">
                              </label>
              </td>
              <td><?php echo e($tarea->hora); ?>-<?php echo e($tarea->descripcion); ?></td>
              <td class="td-actions text-right">
                <div class="table-icons">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                </div>
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
