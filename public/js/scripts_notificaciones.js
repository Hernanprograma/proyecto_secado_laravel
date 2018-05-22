var lector_serial_number= $('#lector_serial_number').val();



var $table = $('#bootstrap-table');

      function operateFormatter(value, row, index) {
          return [
      '<div class="table-icons">',

                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                    '<i class="ti-close"></i>',
                '</a>',
      '</div>',
          ].join('');
      }

      $().ready(function(){
          window.operateEvents = {
              'click .view': function (e, value, row, index) {
                  info = JSON.stringify(row);

                  swal('You click view icon, row: ', info);
                  console.log(info);
              },
              'click .edit': function (e, value, row, index) {
                  info = JSON.stringify(row);

                  swal('You click edit icon, row: ', info);
                  console.log(info);
              },
              'click .remove': function (e, value, row, index) {
                  console.log(row);
                  $table.bootstrapTable('remove', {
                      field: 'id',
                      values: [row.id]
                  });
              }
          };

          $table.bootstrapTable({
              url:dominio+'/api/getNotificaciones/'+lector_serial_number,
              toolbar: ".toolbar",
              clickToSelect: true,
              showRefresh: true,
              search: true,
              showToggle: true,
              showColumns: true,
              pagination: true,
              searchAlign: 'left',
              pageSize: 5,
              clickToSelect: false,
              pageList: [8,10,25,50,100],

              formatShowingRows: function(pageFrom, pageTo, totalRows){
                  //do nothing here, we don't want to show the text "showing x of y from..."
              },
              formatRecordsPerPage: function(pageNumber){
                  return pageNumber + " Filas visibles";
              },
              icons: {
                  refresh: 'fa fa-refresh',
                  toggle: 'fa fa-th-list',
                  columns: 'fa fa-columns',
                  detailOpen: 'fa fa-plus-circle',
                  detailClose: 'ti-close'
              }
          });

          //activate the tooltips after the data table is initialized
          $('[rel="tooltip"]').tooltip();

          $(window).resize(function () {
              $table.bootstrapTable('resetView');
          });
  });
