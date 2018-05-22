
function showLoading(selector){
  $(selector).css('visibility', 'visible');
}






//******************************************************************//
//************************** GRAFICA BARRAS DIARIO*******************************//
//******************************************************************//




var fechaqueryDay = new Date();
var fecha =getFormattoQuery(fechaqueryDay);
//alert(fecha);
var UrlConsumoBarrasDay=dominio+'/api/getConsumoHoras/"'+fecha+'"/'+lector_serial_number;



function getConsumoHoras(){
  showLoading('#curtainhoras');


  fetch(UrlConsumoBarrasDay)

  .then(function(response) {

    return response.json();
  })
  .then(function(data) {


    console.log("DATOS GRAFICA DIARIO POR HORAS")
    console.log(data)
    pintaGraficaColumnasDiariolSolarBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function formateaFechasColumnasDiario () {

  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#dia").text(fechaqueryDay.toLocaleDateString('es-ES', options));

}

function setDayMore() {

  fechaquery = new Date(fechaqueryDay.setDate(fechaqueryDay.getDate()+1));

  fecha=getFormattoQuery(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#dia").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasDay=dominio+'/api/getConsumoHoras/"'+fecha+'"/'+lector_serial_number;
  getConsumoHoras();

}
function setDayMinus() {


  fechaquery = new Date(fechaqueryDay.setDate(fechaqueryDay.getDate()-1));
  fecha=getFormattoQuery(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#dia").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasDay=dominio+'/api/getConsumoHoras/"'+fecha+'"/'+lector_serial_number;
  getConsumoHoras();
}
function setCurDay(){
  fechaqueryDay = new Date();
  fecha =getFormattoQuery(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#dia").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasDay=dominio+'/api/getConsumoHoras/"'+fecha+'"/'+lector_serial_number;
  getConsumoHoras();

}




/*<!-- amCharts javascript code -->*/
function pintaGraficaColumnasDiariolSolarBateria(datos){

  /*AmCharts.makeChart("chartdivDiaria",
  {
  "type": "serial",
  "theme": "none",
  "categoryField": "fecha",
  "dataDateFormat": "YYYY-MM-DD HH:NN:SS",

  "startDuration": 1,
  "categoryAxis": {
  "gridPosition": "start"
},
"trendLines": [],

"graphs": [
{

"balloonText": "<div style='margin:5px; font-size:12px;'>Producido:<b>[[producido]]</b></div>",
"id": "AmGraph-2",
"title": "SOLAR",
"valueField": "producido",
"fillAlphas": 0.9,
"lineAlpha": 0.2,
"type": "column"

},
{
"balloonText": "<div style='margin:5px; font-size:12px;'>Consumido:<b>[[consumido]]</b></div>",

"id": "AmGraph-1",
"title": "BATERIAS",
"type": "column",
"valueField": "consumido",
"fillAlphas": 0.9,
"lineAlpha": 0.2,
"type": "column",
"clustered":false,
"columnWidth":0.5
}
],
"plotAreaFillAlphas": 0.1,
"guides": [],
"valueAxes": [
{
"id": "ValueAxis-1",
"stackType": "3d",
"title": "kvh"
}
],
"allLabels": [],
"balloon": {},
"legend": {
"enabled": true,
"useGraphSettings": true
},
"titles": [
{
"id": "Title-1",
"size": 15,
"text": ""
}
],
"allLabels": [{
"text": "Horas del dia",
"x": "!20",
"y": "!20",
"width": "50%",
"size": 15,
"bold": true,
"align": "right"
}],

"dataProvider": datos,
"listeners": [{
"event": "rendered",
"method": function(e) {
$('#curtainhoras').css('visibility', 'hidden');
}
}]
}, 2000);
}*/

AmCharts.makeChart("chartdivDiaria",

  {
  "type": "serial",
  "theme": "light",
  "depth3D": 20,
  "angle": 30,
  "legend": {
    "horizontalGap": 10,
    "useGraphSettings": true,
    "markerSize": 10
  },

  "valueAxes": [{
         "stackType": "regular",
         "axisAlpha": 0.3,
         "gridAlpha": 0,
         "title":"kvh"

     }],

     "graphs": [ {

       "balloonText": "<div style='margin:5px; font-size:12px;'>Baterias:<b>[[bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Baterias]]",
       "lineAlpha": 0.3,
       "title": "Baterias",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[bateria]]',
       "labelPosition": "inside",
       "valueField": "bateria"
     }, {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Red:<b>[[red]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Red]]",
       "lineAlpha": 0.3,
       "title": "Red",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[red]]',
       "labelPosition": "inside",
       "valueField": "red"
     } , {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Solar:<b>[[sol]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Solar]]",
       "lineAlpha": 0.3,
       "title": "Solar",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[sol]]',
       "labelPosition": "inside",
       "valueField": "sol"
     } ],
     "categoryField": "fecha",
     "categoryAxis": {
       "gridPosition": "start",
       "axisAlpha": 0,
       "gridAlpha": 0,
       "position": "left"
     },
     "export": {
       "enabled": true
     },
  "dataProvider": datos,
  "listeners": [{
    "event": "rendered",
    "method": function(e) {
      $('#curtainhoras').css('visibility', 'hidden');
    }
  }]
}, 2000);
}

//******************************************************************//
//************************** FIN GRAFICA BARRAS DIARIO*******************************//
//******************************************************************//


//******************************************************************//
//************************** GRAFICA BARRAS MENSUAL*******************************//
//******************************************************************//




var fechaqueryMes = new Date();
var fechaMes =getFormattoQuery(fechaqueryMes);
//alert(fecha);
var UrlConsumoBarrasMes=dominio+'/api/getConsumoDias/"'+fechaMes+'"/'+lector_serial_number;



function getConsumosMensuales(){
  showLoading('#curtainmensuales');
  fetch(UrlConsumoBarrasMes)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS GRAFICA  POR DIAS")
    console.log(data)
    pintaGraficaColumnasMensualSolarBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function formateaFechasColumnasMensual() {

  var options = {  year: 'numeric', month: 'long', };
  $("#mes").text(fechaqueryMes.toLocaleDateString('es-ES', options));


}

function setMonthMore() {

  fechaqueryMes = new Date(fechaqueryMes.setMonth(fechaqueryMes.getMonth()+1));
  fechaMes=getFormattoQuery(fechaqueryMes);
  var options = {  year: 'numeric', month: 'long', };
  $("#mes").text(fechaqueryMes.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasMes=dominio+'/api/getConsumoDias/"'+fechaMes+'"/'+lector_serial_number;
  getConsumosMensuales();

}
function setMonthMinus() {


  fechaqueryMes = new Date(fechaqueryMes.setMonth(fechaqueryMes.getMonth()-1));
  fechaMes=getFormattoQuery(fechaqueryMes);
  var options = {  year: 'numeric', month: 'long', };
  $("#mes").text(fechaqueryMes.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasMes=dominio+'/api/getConsumoDias/"'+fechaMes+'"/'+lector_serial_number;
  getConsumosMensuales();
}
function setCurMonth(){
  fechaqueryMes = new Date();
  fechaMes =getFormattoQuery(fechaqueryMes);
  var options = {   year: 'numeric', month: 'long' };
  $("#mes").text(fechaqueryMes.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasMes=dominio+'/api/getConsumoDias/"'+fechaMes+'"/'+lector_serial_number;
  getConsumosMensuales();

}




/*<!-- amCharts javascript code -->*/
function pintaGraficaColumnasMensualSolarBateria(datos){
  AmCharts.makeChart("chartdivMensual",
  {
  "type": "serial",
  "theme": "light",
  "depth3D": 20,
  "angle": 30,
  "legend": {
    "horizontalGap": 10,
    "useGraphSettings": true,
    "markerSize": 10
  },

  "valueAxes": [{
         "stackType": "regular",
         "axisAlpha": 0.3,
         "gridAlpha": 0,
         "title":"kvh"

     }],

     "graphs": [ {

       "balloonText": "<div style='margin:5px; font-size:12px;'>Baterias:<b>[[bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Baterias]]",
       "lineAlpha": 0.3,
       "title": "Baterias",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[bateria]]',
       "labelPosition": "inside",
       "valueField": "bateria"
     }, {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Red:<b>[[red]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Red]]",
       "lineAlpha": 0.3,
       "title": "Red",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[red]]',
       "labelPosition": "inside",
       "valueField": "red"
     } , {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Solar:<b>[[sol]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Solar]]",
       "lineAlpha": 0.3,
       "title": "Solar",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[sol]]',
       "labelPosition": "inside",
       "valueField": "sol"
     } ],
     "categoryField": "fecha",
     "categoryAxis": {
       "gridPosition": "start",
       "axisAlpha": 0,
       "gridAlpha": 0,
       "position": "left"
     },
     "export": {
       "enabled": true
     },
  "dataProvider": datos,
    "listeners": [{
      "event": "rendered",
      "method": function(e) {
        $('#curtainmensuales').css('visibility', 'hidden');
      }
    }]
  }, 2000);
}

//******************************************************************//
//************************** FIN GRAFICA BARRAS MENSUAL*******************************//
//******************************************************************//


//******************************************************//
//************************** GRAFICA BARRAS ANUAL*******************************//
//******************************************************************//




var fechaqueryAno = new Date();
var fechaAno=getFormattoQuery(fechaqueryAno);
//alert(fecha);
var UrlConsumoBarrasAno=dominio+'/api/getConsumoMeses/"'+fechaAno+'"/'+lector_serial_number;
//alert(UrlConsumo);

var options = {  year: 'numeric'};
$("#ano").text(fechaqueryMes.toLocaleDateString('es-ES', options));







function getConsumosAnuales(){
  showLoading('#curtainanual');

  fetch(UrlConsumoBarrasAno)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA  POR MESES")
    console.log(data)
    pintaGraficaColumnasAnualSolarBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}


function setYearMore() {

  fechaqueryAno = new Date(fechaqueryAno.setFullYear(fechaqueryAno.getFullYear()+1));
  fechaAno=getFormattoQuery(fechaqueryAno);
  var options = {  year: 'numeric' };
  $("#ano").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasAno=dominio+'/api/getConsumoMeses/"'+fechaAno+'"/'+lector_serial_number;
  getConsumosAnuales();

}
function setYearMinus() {


  fechaqueryAno = new Date(fechaqueryAno.setFullYear(fechaqueryAno.getFullYear()-1));
  fechaAno=getFormattoQuery(fechaqueryAno);
  var options = {   year: 'numeric' };
  $("#ano").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasAno=dominio+'/api/getConsumoMeses/"'+fechaAno+'"/'+lector_serial_number;
  getConsumosAnuales();
}
function setCurYear(){
  fechaqueryAno = new Date();
  fechaAno =getFormattoQuery(fechaqueryAno);
  var options = {  year: 'numeric' };
  $("#ano").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlConsumoBarrasAno=dominio+'/api/getConsumoMeses/"'+fechaAno+'"/'+lector_serial_number;
  getConsumosAnuales();

}




/*<!-- amCharts javascript code -->*/
function pintaGraficaColumnasAnualSolarBateria(datos){
  AmCharts.makeChart("chartdivAnual",
  {
  "type": "serial",
  "theme": "light",
  "depth3D": 20,
  "angle": 30,
  "legend": {
    "horizontalGap": 10,
    "useGraphSettings": true,
    "markerSize": 10
  },

  "valueAxes": [{
         "stackType": "regular",
         "axisAlpha": 0.3,
         "gridAlpha": 0,
         "title":"kvh"

     }],

  "graphs": [ {

    "balloonText": "<div style='margin:5px; font-size:12px;'>Baterias:<b>[[bateria]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Baterias]]",
    "lineAlpha": 0.3,
    "title": "Baterias",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[bateria]]',
    "labelPosition": "inside",
    "valueField": "bateria"
  }, {
    "balloonText": "<div style='margin:5px; font-size:12px;'>Red:<b>[[red]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Red]]",
    "lineAlpha": 0.3,
    "title": "Red",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[red]]',
    "labelPosition": "inside",
    "valueField": "red"
  } , {
    "balloonText": "<div style='margin:5px; font-size:12px;'>Solar:<b>[[sol]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Solar]]",
    "lineAlpha": 0.3,
    "title": "Solar",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[sol]]',
    "labelPosition": "inside",
    "valueField": "sol"
  } ],
  "categoryField": "fecha",
  "categoryAxis": {
    "gridPosition": "start",
    "axisAlpha": 0,
    "gridAlpha": 0,
    "position": "left"
  },
  "export": {
    "enabled": true
  },
  "dataProvider": datos,
    "listeners": [{
      "event": "rendered",
      "method": function(e) {
        $('#curtainanual').css('visibility', 'hidden');
      }
    }]
  }, 2000);
}


//******************************************************************//
//************************** FIN GRAFICA BARRAS ANUAL*******************************//
//******************************************************************//









//******************************************************//
//************************** GRAFICA BARRAS TOTAL AÑOS*******************************//
//******************************************************************//




var fechaqueryTotal = new Date();
var fechaTotal =getFormattoQuery(fechaqueryTotal);
//alert(fecha);
var UrlConsumoBarrasTotal=dominio+'/api/getConsumoAnos/'+lector_serial_number;
//alert(UrlConsumo);


function  getConsumosTotales(){

  fetch(UrlConsumoBarrasTotal)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA  POR AÑOS")
    pintaGraficaColumnasTotalSolarBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}






/*<!-- amCharts javascript code -->*/
function pintaGraficaColumnasTotalSolarBateria(datos){
  AmCharts.makeChart("chartdivTotal",
  {
  "type": "serial",
  "theme": "light",
  "depth3D": 20,
  "angle": 30,
  "legend": {
    "horizontalGap": 10,
    "useGraphSettings": true,
    "markerSize": 10
  },

  "valueAxes": [{
         "stackType": "regular",
         "axisAlpha": 0.3,
         "gridAlpha": 0,
         "title":"kvh"

     }],

     "graphs": [ {

       "balloonText": "<div style='margin:5px; font-size:12px;'>Baterias:<b>[[bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Baterias]]",
       "lineAlpha": 0.3,
       "title": "Baterias",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[bateria]]',
       "labelPosition": "inside",
       "valueField": "bateria"
     }, {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Red:<b>[[red]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Red]]",
       "lineAlpha": 0.3,
       "title": "Red",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[red]]',
       "labelPosition": "inside",
       "valueField": "red"
     } , {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Solar:<b>[[sol]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Solar]]",
       "lineAlpha": 0.3,
       "title": "Solar",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[sol]]',
       "labelPosition": "inside",
       "valueField": "sol"
     } ],
     "categoryField": "fecha",
     "categoryAxis": {
       "gridPosition": "start",
       "axisAlpha": 0,
       "gridAlpha": 0,
       "position": "left"
     },
     "export": {
       "enabled": true
     },
  "dataProvider": datos
  }
);
}


//******************************************************************//
//************************** FIN GRAFICA BARRAS TOTAL*******************************//
//******************************************************************//




// Get date formatted as YYYY-MM-DD
function getFormattoQuery (date) {
  return date.getFullYear()
  + "-"
  + ("0" + (date.getMonth() + 1)).slice(-2)
  + "-"
  + ("0" + date.getDate()).slice(-2);
}
