

var fechaini;
var fechafin;


var fechainitoquery=$('#fechaini').val();
var fechafintoquery=$('#fechafin').val();




 function informe(){
  var informe=$('#tipo-informe').val();
  
 
  if (informe=="excel"){
      showNotification('top','left','Vas a generar un iforme en formato CSV; ten paciencia');
    $('#bootstrap-table').tableExport({type:'excel'});
  }

if (informe=="pdf"){
  showNotification('top','left','Vas a generar un iforme en formato PDF; ten paciencia');
  $('#bootstrap-table').tableExport({type:'pdf',
                           jspdf: {orientation: 'l',
                                   format: 'a4',
                                   margins: {left:10, right:10, top:20, bottom:20},
                                   autotable: {styles: {fillColor: 'inherit',
                                                        textColor: 'inherit'},
                                               tableWidth: 'auto'}
                                  }
                          });
                        }

    
                        

};


type = ['','info','success','warning','danger'];

 function showNotification(from, align,mensaje){
    color = Math.floor((Math.random() * 4) + 1);

    $.notify({
        icon: "ti-file  ",
        message:mensaje

      },{
          type: type[color],
          timer: 4000,
          placement: {
              from: from,
              align: align
          }
      });
};


function dateToQuery(value, row, index) {
  return moment(value).format('YYYY-MM-DD');
}

/*Este metodo se usa en la vista ; formatea las fechas para mostrarlas en la vista*/
function dateFormat(value, row, index) {
  return moment(value).format('DD/MM/YY');
}
function getDatos(){
  inversor= $('#inversor').val();
   fechainitoquery=$('#fechaini').val();
   fechafintoquery=$('#fechafin').val();



  $table.bootstrapTable('refresh', {

    url:dominio+'/api/centrifugas/'+ fechainitoquery+','+fechafintoquery+'/'

});
}

var $table = $('#bootstrap-table');

function operateFormatter(value, row, index) {
  return [
    '<div class="table-icons">',
    '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
    '<i class="ti-image"></i>',
    '</a>',
    '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
    '<i class="ti-pencil-alt"></i>',
    '</a>',
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

      swal('Ver el detalle de la fila: ', info);
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
    url:dominio+'/api/centrifugas/'+ fechainitoquery+','+fechafintoquery+'/',

    showExport: true,
    formatNoMatches: function () {
        return 'No hay datos, selecciona un criterio de busqueda y clicka mostrar datos';
    },

    showPaginationSwitch:true,
    toolbar: ".toolbar",
    clickToSelect: true,
    showRefresh: true,
    search: false,
    showToggle: true,
    showColumns: true,
    pagination: true,
    searchAlign: 'left',
    pageSize: 15,
    clickToSelect: false,
    pageList: [8,10,25,50,100,1000],

    formatShowingRows: function(pageFrom, pageTo, totalRows){
      //do nothing here, we don't want to show the text "showing x of y from..."
    },
    formatRecordsPerPage: function(pageNumber){
      return pageNumber + " filas visibles";
    },
    icons: {

      paginationSwitchDown:'ti-hand-point-down',
      paginationSwitchUp:'ti-hand-point-up',
      refresh: 'ti-reload',
      toggle: 'ti-view-list-alt',
      columns: 'fti-layout-column4',
      detailOpen: 'fa fa-plus-circle',
      detailClose: 'ti-close'
    }
  }
);

  //activate the tooltips after the data table is initialized
  $('[rel="tooltip"]').tooltip();



  $(window).resize(function () {


    $table.bootstrapTable('resetView');
  });
});
