var lector_serial_number= $('#lector_serial_number').val();
var inversor= $('#inversor').val();

// var tipoFecha = $('#tipo-reporte').val();
var tipoFecha = "day";

var fechaini;
var fechafin;
$('#fechaini').val( moment(fechaini).format('DD-MM-YYYY'));
$('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));
var fechainitoquery=$('#fechaini').val().split("-").reverse().join("-");
var fechafintoquery=$('#fechafin').val().split("-").reverse().join("-");





//
// $('#tipo-reporte').change(function(){
//   tipoFecha=$('#tipo-reporte').val();
//
//
//   if(tipoFecha=="month"){
//
//     $("#day").hide();
//     $("#year").hide();
//     $("#month").show();
//   }
//   if(tipoFecha=="year"){
//     $("#day").hide();
//     $("#month").hide();
//     $("#year").show();
//   }
//   if(tipoFecha=="day"){
//     $("#day").show();
//     $("#month").hide();
//     $("#year").hide();
//   }
//
// });



$('#tipo-informe').on("change", function(){


var informe=$('#tipo-informe').val();

  if (informe=="excel"){
    alert(informe);
    $('#bootstrap-table').tableExport({type:'csv'});
  }

if (informe=="pdf"){
  alert(informe);
  $('#bootstrap-table').tableExport({type:'pdf',
                           jspdf: {orientation: 'l',
                                   format: 'a3',
                                   margins: {left:10, right:10, top:20, bottom:20},
                                   autotable: {styles: {fillColor: 'inherit',
                                                        textColor: 'inherit'},
                                               tableWidth: 'auto'}
                                  }
                          });
                        }




});






    $('#fechaini.datepicker').datepicker({
        format: 'dd-mm-yyyy',
    });

    $('#fechaini.datepicker').on('changeDate', function(ev){
    $(this).datepicker('hide');
  });

    $('#fechafin.datepicker').datepicker({
        format: 'dd-mm-yyyy',
    });

    $('#fechafin.datepicker').on('changeDate', function(ev){
    $(this).datepicker('hide');
  });

    // $('#month.datepicker').datepicker({
    //       viewMode: 'months',
    //       format: 'mm-yyyy'
    //    	 });
    // $('#year.datepicker').datepicker({
    //            viewMode: 'years',
    //            format: 'dd-mm-yyyy',
    //         	   });


    function testDiferenciadias(fecha1, fecha2) {
      var b=moment(fecha1);
      var a=moment(fecha2);
      var numdias=a.diff(b, 'days');
      if(numdias<0){
        alert("La fecha inicial no puede ser mayor a la final ")
      }
      if(numdias>100){
        alert("Te recomiendo no seleccionar un rango superior a 6 meses si deseas exportar datos ")
      }
    }

function dateToQuery(value, row, index) {
  return moment(value).format('YYYY-MM-DD');
}

/*Este metodo se usa en la vista ; formatea las fechas para mostrarlas en la vista*/
function dateFormat(value, row, index) {
  return moment(value).format('DD/MM/YY HH:mm:ss');
}
function getDatos(){
  inversor= $('#inversor').val();
  fechainitoquery=$('#fechaini').val().split("-").reverse().join("-");
  fechafintoquery=$('#fechafin').val().split("-").reverse().join("-");
  testDiferenciadias(fechainitoquery, fechafintoquery);

//
//   if(tipoFecha=='month'){
//   fecha=$('#month').val().split("-").reverse().join("-");
// }  if(tipoFecha=='year'){
//     fecha=$('#year').val().split("-").reverse().join("-");
// }


  $table.bootstrapTable('refresh', {
    // url:dominio+'/api/getDataInversores/'+tipoFecha+'/"'+fecha1+'/"'+fecha2+'"/'+inversor+'/'+lector_serial_number,
    // url:dominio+'/api/getDataInversores/"'+fecha1+'/"'+fecha2+'"/'+inversor+'/'+lector_serial_number,
    url:dominio+'/api/getDataInversores/'+ fechainitoquery+'/'+fechafintoquery+'/'+inversor+'/'+lector_serial_number,
  //var datos = document.getElementById("datos").value;
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

      // url:dominio+'/api/getDataInversores/"'+fecha1+'/"'+fecha2+'"/'+inversor+'/'+lector_serial_number,
      // url:dominio+'/api/getDataInversores/'+tipoFecha+'/"'+fecha1+'/"'+fecha2+'"/'+inversor+'/'+lector_serial_number,
    //url:dominio+'/api/getDataInversores/'+ fechainitoquery+'/'+fechafintoquery+'/'+inversor+'/'+lector_serial_number,
    showExport: true,

    showPaginationSwitch:true,
    toolbar: ".toolbar",
    clickToSelect: true,
    showRefresh: true,
    search: true,
    showToggle: true,
    showColumns: true,
    pagination: true,
    searchAlign: 'left',
    pageSize: 30,
    clickToSelect: false,
    pageList: [8,10,25,50,100],

    formatShowingRows: function(pageFrom, pageTo, totalRows){
      //do nothing here, we don't want to show the text "showing x of y from..."
    },
    formatRecordsPerPage: function(pageNumber){
      return pageNumber + " filas visibles";
    },
    icons: {

      paginationSwitchDown:'fa fa-toggle-down',
      paginationSwitchUp:'fa fa-toggle-up',
      refresh: 'fa fa-refresh',
      toggle: 'fa fa-th-list',
      columns: 'fa fa-columns',
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
