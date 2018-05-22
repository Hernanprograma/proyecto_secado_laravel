var lector_serial_number= $('#lector_serial_number').val();
var inversor= $('#inversor').val();
var tipoFecha = $('#tipo-reporte').val();
var graphs=$('#datos').val();
var fechaini=new Date();
var fechafin=new Date();
$('#fechaini').val( moment(fechaini).format('DD-MM-YYYY'));
$('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));
$( "#boton-get-datos" ).prop( "disabled", true );




window.onload = function() {

  //  getFormattedDate();
  //traerdatos();

};




$('#datos').change(function(event) {
  if ($(this).val().length > 0) {
    $("#boton-get-datos" ).prop( "disabled", false );

  }
  if ($(this).val().length >= 8) {

    $("#boton-get-datos" ).prop( "disabled", true );

  }

  if ($(this).val().length >= 7) {
    alert("Solo puedo mostrar 7 graficas a la vez");


  }
  if ($(this).val().length < 1) {
    $("#boton-get-datos" ).prop( "disabled", true );

  }

});



$('#tipo-reporte').change(function(){
  tipoFecha=$('#tipo-reporte').val();

  if(tipoFecha=="today"){
    fechaini=new Date();
    fechafin=new Date();
    $('#fechaini').val( moment(fechaini).format('DD-MM-YYYY'));
    $('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));

  }
  if(tipoFecha=="lastweek"){
    fechaini=new Date();
    fechafin=new Date();
    $('#fechaini').val( moment(fechaini).subtract(7, 'days').format('DD-MM-YYYY'));
    $('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));
    fechaini=$('#fechaini').val();
    fechafin=$('#fechafin').val();

  }
  if(tipoFecha=="lastmonth"){
    fechaini=new Date();
    fechafin=new Date();
    $('#fechaini').val( moment(fechaini).subtract(1, 'month').format('DD-MM-YYYY'));
    $('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));
    fechaini=$('#fechaini').val();
    fechafin=$('#fechafin').val();

  }
  if(tipoFecha=="lastyear"){
    fechaini=new Date();
    fechafin=new Date();
    $('#fechaini').val( moment(fechaini).subtract(1, 'year').format('DD-MM-YYYY'));
    $('#fechafin').val( moment(fechafin).format('DD-MM-YYYY'));
    fechaini=$('#fechaini').val();
    fechafin=$('#fechafin').val();

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



function getDatos(){

  fechaini=$('#fechaini').val();
  fechafin=$('#fechafin').val();
  var graficas = $('#datos').val();
  var fechainitoquery=$('#fechaini').val().split("-").reverse().join("-");
  var fechafintoquery=$('#fechafin').val().split("-").reverse().join("-");
  graphs=$('#datos').val();
  inversor= $('#inversor').val();

  var test=moment(fechafintoquery).isSameOrAfter(fechainitoquery); // true


  if(test){
    $('#curtain').css('visibility', 'visible');
    gethistoricos(inversor,fechafintoquery,fechainitoquery,graphs);
  }else{
    alert("La fecha inicial no puede ser mayor que la final");
  }



  // alert(lector_serial_number+','+inversor+","+fechainitoquery+","+fechafintoquery+","+graficas);
}



function gethistoricos(inversor,fechafintoquery,fechainitoquery,graphs){
  var UrlHistoricos= dominio+'/api/getHistoricos/'+inversor+'/'+lector_serial_number+'/'+fechainitoquery+'/'+fechafintoquery+'/'+graphs;
  //alert('Ruta:'+UrlHistoricos);
  fetch(UrlHistoricos)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {

    console.log('historicos =',data);
    pintargrafica(data);

  })
  .catch(function(err) {
    console.error(err);
  });
}






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













function pintargrafica(datos){

  var chart=AmCharts.makeChart("chartdiv",
  {

    "type": "serial",
    "addClassNames": true,

    "theme": "none",
    "categoryField": "timestamp",
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
    ],

    "guides": [],
    "valueAxes": [],
    "allLabels": [],
    "balloon": {},
    "legend": {
      "useGraphSettings": true,
      "enabled": true

    },
    "titles": [],
    "dataProvider": datos,
    "listeners": [{
      "event": "rendered",
      "method": function(e) {
        $('#curtain').css('visibility', 'hidden');
      }
    }]
  }, 2000);

  // funcion que establece a derecha o izquierda la posicion de las escalas
  function posicion(valor){
    if(valor%2==0){position="right"}
    else{position="left"}
    return position;
  };
  //establece la distancia de de las escalas con respecto a las graficas
  function offset(valor){
    if (valor<=1){return valor}
    else{return 20*valor;}

  }
  function unidades(valor){
    switch (valor) {
    case "total_load_watt":
    return "W";
    break;
    case "total_load_va":
    return "VA";
    break;
    case "total_load_percent":
    return "%";
    break;
    case "load_watt":
    return "W";
    break;
    case "load_percent":
    return "%";
    break;
    case "load_va":
    return "VA";
    break;
    case "batt_capacity":
    return "%";
    break;
    case "voltage_batt":
    return "V";
    break;
    case "batt_charge_current":
    return "A";
    break;
    case "batt_discharge_current":
    return "A";
    break;
    case "voltage_grid":
    return "V";
    break;
    case "freq_grid":
    return "Hz";
    break;
    case "voltage_out":
    return "V";
    break;
    case "freq_out":
    return "Hz";
    break;
    case "pv_in_voltage":
    return "Vcc";
    break;
    case "pv_in_current":
    return "A";
    break;case "total_charge_current":
    return "A";
    break;
    case "load_watt_red":
    return "W";
    break;
    break;case "total_load_watt_red":
    return "W";
    break;
    default:
    return "";
    break;
  }
}
  function traduce(valor){
          switch (valor) {
          case "total_load_watt":
          return "Total W";
          break;
          case "total_load_va":
          return "Total va";
          break;
          case "total_load_percent":
          return "Total % Consumo";
          break;
          case "load_watt":
          return "W";
          break;
          case "load_percent":
          return "Total % Consumo";
          break;
          case "load_va":
          return "consumo en va";
          break;
          case "batt_capacity":
          return "capacidad Bateria";
          break;
          case "voltage_batt":
          return "Tension Bateria";
          break;
          case "batt_charge_current":
          return "carga bateria Amp";
          break;
          case "batt_discharge_current":
          return "Descarga bateria Amp";
          break;
          case "voltage_grid":
          return "Tension red";
          break;
          case "freq_grid":
          return "Frecuencia red";
          break;
          case "voltage_out":
          return "Tension de salida";
          break;
          case "freq_out":
          return "Frecuencia de salida";
          break;
          case "pv_in_voltage":
          return "Tension paneles solares";
          break;
          case "pv_in_current":
          return "Amp paneles solares";
          break;
          case "total_charge_current":
          return "Carga a a bateria total Amp";
          break;
          case "load_watt_red":
          return "Carga de red Amp";
          break;
          case "total_load_watt_red":
          return "Total carga red W";
          break;
          default:
          return "";
          break;
              }

  }
  //Colores a usar en la grafica
  var colores=['#FF0000','#0000FF','#FF7F50','#008B8B','#8B008B','#32CD32','#4169E1'];


  var cabeceras= Object.keys(datos[0]);
  for( var i in cabeceras) {
    if (i>0){//si existen gráficas seleccionadas

      //creamos la grafica
      var graph = new AmCharts.AmGraph();

      //creamos la escala de x
      var a = new AmCharts.ValueAxis();

      // //creamos la leyenda
      var legend = new AmCharts.AmLegend();
      //legend.color=color;
      //legend.backgroundColor=colores[i];



      a.axisThickness = 2;
      a.gridAlpha = 0;
      a.axisAlpha = 1;
      a.color=colores[i-1];
      a.unit=unidades(cabeceras[i]);
      a.offset=offset(i);
      a.position = posicion(i);



      graph.color=colores[i-1];
      graph.legend=legend;
      graph.legendColor=colores[i-1];
      graph.lineColor=colores[i-1];
      graph.lineThickness = 2;
      graph.id = cabeceras[i];
      graph.type="smoothedLine",
      graph.title =  traduce(cabeceras[i]);
      graph.valueField = cabeceras[i];
      graph.balloonText = "<div style='margin:5px; font-size:11px;'>"+traduce(cabeceras[i])+":<b>[["+cabeceras[i]+"]]</b>"+unidades(cabeceras[i])+"</div>";
      graph.valueAxis = a;

      chart.addLegend(legend);
      chart.addValueAxis(a);
      chart.addGraph(graph);
    }
  }








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
