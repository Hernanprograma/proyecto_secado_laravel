
function showLoadingBateria(selector){
  $(selector).css('visibility', 'visible');
}






//******************************************************************//
//************************** GRAFICA BARRAS DIARIO*******************************//
//******************************************************************//




var fechaqueryDay = new Date();
var fecha =getFormattoQueryBateria(fechaqueryDay);
//alert(fecha);
var UrlBateriaBarrasDay=dominio+'/api/getBateriaHoras/"'+fecha+'"/'+lector_serial_number;



function getBateriaHoras(){
  showLoadingBateria('#curtainhorasBateria');


  fetch(UrlBateriaBarrasDay)

  .then(function(response) {

    return response.json();
  })
  .then(function(data) {


    console.log("DATOS GRAFICA BATERIAS DIARIO POR HORAS")
    console.log(data)
  pintaGraficaDiaBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function formateaFechasColumnasDiario () {

  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBateria").text(fechaqueryDay.toLocaleDateString('es-ES', options));

}

function setDayMoreBateria() {

  fechaquery = new Date(fechaqueryDay.setDate(fechaqueryDay.getDate()+1));

  fecha=getFormattoQueryBateria(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBateria").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasDay=dominio+'/api/getBateriaHoras/"'+fecha+'"/'+lector_serial_number;
  getBateriaHoras();

}
function setDayMinusBateria() {


  fechaquery = new Date(fechaqueryDay.setDate(fechaqueryDay.getDate()-1));
  fecha=getFormattoQueryBateria(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBateria").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasDay=dominio+'/api/getBateriaHoras/"'+fecha+'"/'+lector_serial_number;
  getBateriaHoras();
}
function setCurDayBateria(){
  fechaqueryDay = new Date();
  fecha =getFormattoQueryBateria(fechaqueryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBateria").text(fechaqueryDay.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasDay=dominio+'/api/getBateriaHoras/"'+fecha+'"/'+lector_serial_number;
  getBateriaHoras();

}

function pintaGraficaDiaBateria(datos){



AmCharts.makeChart("chartdivDiariaBateria",

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

    "balloonText": "<div style='margin:5px; font-size:12px;'>Carga:<b>[[carga_bateria]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Carga Bateria]]",
    "lineAlpha": 0.3,
    "title": "Carga Bateria",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[carga_bateria]]',
    "labelPosition": "inside",
    "valueField": "carga_bateria"
  }, {
    "balloonText": "<div style='margin:5px; font-size:12px;'>Descarga:<b>[[descarga_bateria]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[descarga_bateria]]",
    "lineAlpha": 0.3,
    "title": "Descarga Bateria",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[descarga_bateria]]',
    "labelPosition": "inside",
    "valueField": "descarga_bateria"
  }  ],
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
      $('#curtainhorasBateria').css('visibility', 'hidden');
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




var fechaqueryMesBateria = new Date();
var fechaMesBateria =getFormattoQueryBateria(fechaqueryMesBateria);
//alert(fecha);
var UrlBateriaBarrasMes=dominio+'/api/getBateriaDias/"'+fechaMesBateria+'"/'+lector_serial_number;



function getBateriasMensuales(){
  //showLoadingBateria('#curtainmensualesBateria');
  fetch(UrlBateriaBarrasMes)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS GRAFICA BATERIAS  POR DIAS")
    console.log(data)
    pintaGraficaMensualBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function formateaFechasColumnasMensual() {

  var options = {  year: 'numeric', month: 'long', };
  $("#mesBateria").text(fechaqueryMes.toLocaleDateString('es-ES', options));


}

function setMonthMoreBateria() {

  fechaqueryMesBateria = new Date(fechaqueryMesBateria.setMonth(fechaqueryMesBateria.getMonth()+1));
  fechaMesBateria=getFormattoQueryBateria(fechaqueryMesBateria);
  var options = {  year: 'numeric', month: 'long', };
  $("#mesBateria").text(fechaqueryMesBateria.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasMes=dominio+'/api/getBateriaDias/"'+fechaMesBateria+'"/'+lector_serial_number;
  getBateriasMensuales();

}
function setMonthMinusBateria() {


  fechaqueryMesBateria = new Date(fechaqueryMesBateria.setMonth(fechaqueryMesBateria.getMonth()-1));
  fechaMesBateria=getFormattoQueryBateria(fechaqueryMesBateria);
  var options = {  year: 'numeric', month: 'long', };
  $("#mesBateria").text(fechaqueryMesBateria.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasMes=dominio+'/api/getBateriaDias/"'+fechaMesBateria+'"/'+lector_serial_number;
  getBateriasMensuales();
}
function setCurMonthBateria(){
  fechaqueryMesBateria = new Date();
  fechaMesBateria =getFormattoQueryBateria(fechaqueryMesBateria);
  var options = {   year: 'numeric', month: 'long' };
  $("#mesBateria").text(fechaqueryMesBateria.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasMes=dominio+'/api/getBateriaDias/"'+fechaMesBateria+'"/'+lector_serial_number;
  getBateriasMensuales();

}




/*<!-- amCharts javascript code -->*/
function  pintaGraficaMensualBateria(datos){
  AmCharts.makeChart("chartdivMensualBateria",
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

     "graphs": [{

       "balloonText": "<div style='margin:5px; font-size:12px;'>Carga:<b>[[carga_bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Carga Bateria]]",
       "lineAlpha": 0.3,
       "title": "Carga Bateria",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[carga_bateria]]',
       "labelPosition": "inside",
       "valueField": "carga_bateria"
     }, {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Descarga:<b>[[descarga_bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[descarga_bateria]]",
       "lineAlpha": 0.3,
       "title": "Descarga Bateria",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[descarga_bateria]]',
       "labelPosition": "inside",
       "valueField": "descarga_bateria"
     }  ],
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
        $('#curtainmensualesBateria').css('visibility', 'hidden');
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
var fechaAno=getFormattoQueryBateria(fechaqueryAno);
//alert(fecha);
var UrlBateriaBarrasAno=dominio+'/api/getBateriaMeses/"'+fechaAno+'"/'+lector_serial_number;
//alert(UrlBateria);

var options = {  year: 'numeric'};
$("#anoBateria").text(fechaqueryAno.toLocaleDateString('es-ES', options));







function getBateriasAnuales(){
  //showLoadingBateria('#curtainanualBateria');

  fetch(UrlBateriaBarrasAno)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA BATERIA POR MESES")
    console.log(data)
    pintaGraficaAnualBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}


function setYearMoreBateria() {

  fechaqueryAno = new Date(fechaqueryAno.setFullYear(fechaqueryAno.getFullYear()+1));
  fechaAno=getFormattoQueryBateria(fechaqueryAno);
  var options = {  year: 'numeric' };
  $("#anoBateria").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasAno=dominio+'/api/getBateriaMeses/"'+fechaAno+'"/'+lector_serial_number;
  getBateriasAnuales();

}
function setYearMinusBateria() {


  fechaqueryAno = new Date(fechaqueryAno.setFullYear(fechaqueryAno.getFullYear()-1));
  fechaAno=getFormattoQueryBateria(fechaqueryAno);
  var options = {   year: 'numeric' };
  $("#anoBateria").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasAno=dominio+'/api/getBateriaMeses/"'+fechaAno+'"/'+lector_serial_number;
  getBateriasAnuales();
}
function setCurYearBateria(){
  fechaqueryAno = new Date();
  fechaAno =getFormattoQueryBateria(fechaqueryAno);
  var options = {  year: 'numeric' };
  $("#anoBateria").text(fechaqueryAno.toLocaleDateString('es-ES', options));
  UrlBateriaBarrasAno=dominio+'/api/getBateriaMeses/"'+fechaAno+'"/'+lector_serial_number;
  getBateriasAnuales();

}




/*<!-- amCharts javascript code -->*/
function  pintaGraficaAnualBateria(datos){
  AmCharts.makeChart("chartdivAnualBateria",
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

    "balloonText": "<div style='margin:5px; font-size:12px;'>Carga:<b>[[carga_bateria]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Carga Bateria]]",
    "lineAlpha": 0.3,
    "title": "Carga Bateria",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[carga_bateria]]',
    "labelPosition": "inside",
    "valueField": "carga_bateria"
  }, {
    "balloonText": "<div style='margin:5px; font-size:12px;'>Descarga:<b>[[descarga_bateria]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[descarga_bateria]]",
    "lineAlpha": 0.3,
    "title": "Descarga Bateria",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[descarga_bateria]]',
    "labelPosition": "inside",
    "valueField": "descarga_bateria"
  }  ],
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
        $('#curtainanualBateria').css('visibility', 'hidden');
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
var fechaTotal =getFormattoQueryBateria(fechaqueryTotal);
//alert(fecha);
var UrlBateriaBarrasTotal=dominio+'/api/getBateriaAnos/'+lector_serial_number;
//alert(UrlBateria);


function  getBateriasTotales(){

  fetch(UrlBateriaBarrasTotal)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA  POR AÑOS")
    pintaGraficaTotalBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}






/*<!-- amCharts javascript code -->*/
function pintaGraficaTotalBateria(datos){
  AmCharts.makeChart("chartdivTotalBateria",
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

       "balloonText": "<div style='margin:5px; font-size:12px;'>Carga:<b>[[carga_bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Carga Bateria]]",
       "lineAlpha": 0.3,
       "title": "Carga Bateria",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[carga_bateria]]',
       "labelPosition": "inside",
       "valueField": "carga_bateria"
     }, {
       "balloonText": "<div style='margin:5px; font-size:12px;'>Descarga:<b>[[descarga_bateria]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[descarga_bateria]]",
       "lineAlpha": 0.3,
       "title": "Descarga Bateria",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[descarga_bateria]]',
       "labelPosition": "inside",
       "valueField": "descarga_bateria"
     }  ],
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
function getFormattoQueryBateria (date) {
  return date.getFullYear()
  + "-"
  + ("0" + (date.getMonth() + 1)).slice(-2)
  + "-"
  + ("0" + date.getDate()).slice(-2);
}
