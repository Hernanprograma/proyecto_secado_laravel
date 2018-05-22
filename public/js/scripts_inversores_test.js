var lector_serial_number= $('#lector_serial_number').val();


window.onload = function() {

  getFormattedDate();
  traerdatos();




};


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
              url:dominio+'/api/getDataInversores/'+lector_serial_number,
              toolbar: ".toolbar",
              clickToSelect: true,
              showRefresh: true,
              search: true,
              showToggle: true,
              showColumns: true,
              pagination: true,
              searchAlign: 'left',
              pageSize: 10,
              clickToSelect: false,
              pageList: [8,10,25,50,100],

              formatShowingRows: function(pageFrom, pageTo, totalRows){
                  //do nothing here, we don't want to show the text "showing x of y from..."
              },
              formatRecordsPerPage: function(pageNumber){
                  return pageNumber + " filas visibles";
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

  //var lector_serial_number=1823531907;

  var toalarma = new Date();
  var fecha = null;

  var UrlEnergia= dominio+'/api/getDataInversoresGraficaToday/'+lector_serial_number;


  function traerdatos(){
    fetch(UrlEnergia)
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {

      console.log('data =',data);
      pintargrafica(data);
    })
    .catch(function(err) {
      console.error(err);
    });
  }


  function traer(){
    fetch(UrlEnergia)
    .then(function(response) {
      return response.json();

    })
    .then(function(data) {
      console.log('data =',data);
      pintargrafica(data);
    })
    .catch(function(err) {
      console.error(err);
    });
  }

  function setReportDate(valor) {


    var fecha;
    if (valor==1) {
      toalarma = new Date(toalarma.getTime() + 86400000);
      fecha=getFormattoQuery(toalarma);
      $("#reportDate").val(toalarma.toLocaleDateString());
      UrlEnergia= dominio+'/api/getDataInversoresGrafica/'+fecha+'/'+lector_serial_number;
      traerdatos();

    }
    if (valor==-1) {

      toalarma = new Date(toalarma.getTime() - 86400000);
      fecha=getFormattoQuery(toalarma);
      $("#reportDate").val(toalarma.toLocaleDateString());
      UrlEnergia= dominio+'/api/getDataInversoresGrafica/'+fecha+'/'+lector_serial_number;
      traerdatos();
    }

  }
  //******************************************************************//
  //************************** GRAFICAS*******************************//
  //******************************************************************//

  /*<!-- amCharts javascript code -->*/

  /*function pintargrafica(datos){
var url="http://localhost:8000/api/getDataInversoresGraficaToday/89723542";
    //var keys = Object.keys(datos[0]);
  //console.log('obj contains ' + keys.length + ' keys: '+  keys);
/*  Object.keys(datos[0]).forEach(function (key) {
        console.log(key)
        chart.graphs.push({
          "fillAlphas": 0.1,
          "id": "key",
          "title": "key",
          "valueField": "key",
          "balloonText": "<div style='margin:5px; font-size:11px;'>Potencia:<b>[[key]]</b></div>"
        });
    });*/


    /*var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {
    "url": url,
    "format": "json",
    "showCurtain": true,
    "showErrors": true,
    "postProcess": function(data, config, chart) {
      var newData = [];
      for (var i = 0; i < data.rows.length; i++) {
        var dataPoint = {};
        for (var c = 0; c < data.columns.length; c++) {
          dataPoint[data.columns[c]] = data.rows[i][c];
        }
        newData.push(dataPoint);
      }
      console.log(JSON.stringify(newData));
      return newData;
    }
  },
  "categoryField": "date",
  "dataDateFormat": "YYYY-MM-DD HH:NN:SS",
  "categoryAxis": {
    "minPeriod": "ss",
    "parseDates": true
  },
  "legend": {
    "enabled": true,
    "useGraphSettings": true
  },
  "chartCursor": {
    "enabled": true,
    "categoryBalloonDateFormat": "JJ:NN:SS"
  },
  "chartScrollbar": {
    "enabled": true
  },
  "graphs": [
      {
        "fillAlphas": 0.1,
        "id": "intensidad",
        "title": "Intensidad",
        "valueField": "intensidad",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Intensidad:<b>[[intensidad]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "id": "intensidad",
        "title": "Intensidad",
        "valueField": "intensidad2",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Intensidad:<b>[[intensidad]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "id": "tension",
        "title": "Tension",
        "valueField": "tension",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Tension:<b>[[tension]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "id": "potencia",
        "title": "Potencia",
        "valueField": "potencia",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Potencia:<b>[[potencia]]</b></div>"
      }],

});

  }*/

  function pintargrafica(datos){


    AmCharts.makeChart("chartdiv",
    {

      "type": "serial",
      "addClassNames": true,
     "theme": "none",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD HH:NN:SS",
      "categoryAxis": {
        "minPeriod": "ss",
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true,
        "categoryBalloonDateFormat": "JJ:NN:SS"
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "fillAlphas": 0.1,
          "id": "intensidad",
          "title": "Intensidad",
          "valueField": "intensidad",
          "balloonText": "<div style='margin:5px; font-size:11px;'>Intensidad:<b>[[intensidad]]</b></div>"
        },
        {
          "fillAlphas": 0.1,
          "id": "tension",
          "title": "Tension",
          "valueField": "tension",
          "balloonText": "<div style='margin:5px; font-size:11px;'>Tension:<b>[[tension]]</b></div>"
        },
        {
          "fillAlphas": 0.1,
          "id": "potencia",
          "title": "Potencia",
          "valueField": "potencia",
          "balloonText": "<div style='margin:5px; font-size:11px;'>Potencia:<b>[[potencia]]</b></div>"
        },{
          "fillAlphas": 0.1,
          "id": "hola",
          "title": "Hola",
          "valueField": "hola",
          "balloonText": "<div style='margin:5px; font-size:11px;'>Hola:<b>[[hola]]</b></div>"
        }
      ],

      "guides": [],
      "valueAxes": [],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [],
      "dataProvider": datos
    }
  );

  AmCharts.addInitHandler(function(chart) {

// check if legend enabled
if (chart.legend === undefined)
  return;

// determine type
if (chart.type == "serial") {
  // iterate through all o fthe graphs
  for (var i = 0; i < chart.graphs.length; i++) {

    // get graph and pre-set it to be hidden in legend
    var graph = chart.graphs[i];
    graph.visibleInLegend = false;
    graph.showBalloon = false;

    // iterate through all of the data and look for non-zero values
    // if found, make the graph visible
    for (var x = 0; x < chart.dataProvider.length; x++) {
      if (chart.dataProvider[x][graph.valueField] !== 0) {
        graph.visibleInLegend = true;
        graph.showBalloon = true;
        break;
      }
    }
  }
}
else if (chart.type == "pie") {

  // add visibleInLegendField to chart config
  chart.visibleInLegendField = "visibleInLegend";

  // check each slice
  for(var i = 0; i < chart.dataProvider.length; i++) {
    if (chart.dataProvider[i][chart.valueField] === 0) {
      chart.dataProvider[i].visibleInLegend = false;
    }
  }
}

}, ["serial", "pie"]);


}






  // Get date formatted as YYYY-MM-DD
  function getFormattoQuery (date) {
    return date.getFullYear()
    + "-"
    + ("0" + (date.getMonth() + 1)).slice(-2)
    + "-"
    + ("0" + date.getDate()).slice(-2);
  }

  function getFormattedDate () {
    $("#reportDate").val(toalarma.toLocaleDateString());
  }

  function getDatos(){
    var fecha_ini = document.getElementById("fecha_ini").value;
var fecha_fin = document.getElementById("fecha_fin").value;
var inversor = document.getElementById("inversor").value;
var datos = document.getElementById("datos").value;

    alert(inversor+","+fecha_ini+","+fecha_fin+","+datos+","+lector_serial_number);
  }
