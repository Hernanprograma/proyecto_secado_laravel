
function showLoadingBalance(selector){
  $(selector).css('visibility', 'visible');
}






//******************************************************************//
//************************** GRAFICA BARRAS DIARIO*******************************//
//******************************************************************//




var fechaBalancequeryDay = new Date();
var fechaBalance =getFormattoQueryBalance(fechaBalancequeryDay);
//alert(fechaBalance);
var UrlBalanceBarrasDay=dominio+'/api/getBalanceHoras/"'+fechaBalance+'"/'+lector_serial_number;



function getBalanceHoras(){
  showLoadingBalance('#curtainhorasBalance');


  fetch(UrlBalanceBarrasDay)

  .then(function(response) {

    return response.json();
  })
  .then(function(data) {


    console.log("DATOS GRAFICA BATERIAS DIARIO POR HORAS")
    console.log(data)
  pintaGraficaDiaBalance(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function formateaFechasColumnasDiario () {

  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBalance").text(fechaBalancequeryDay.toLocaleDateString('es-ES', options));

}

function setDayMoreBalance() {

  fechaBalancequery = new Date(fechaBalancequeryDay.setDate(fechaBalancequeryDay.getDate()+1));

  fechaBalance=getFormattoQueryBalance(fechaBalancequeryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBalance").text(fechaBalancequeryDay.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasDay=dominio+'/api/getBalanceHoras/"'+fechaBalance+'"/'+lector_serial_number;
  getBalanceHoras();

}
function setDayMinusBalance() {


  fechaBalancequery = new Date(fechaBalancequeryDay.setDate(fechaBalancequeryDay.getDate()-1));
  fechaBalance=getFormattoQueryBalance(fechaBalancequeryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBalance").text(fechaBalancequeryDay.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasDay=dominio+'/api/getBalanceHoras/"'+fechaBalance+'"/'+lector_serial_number;
  getBalanceHoras();
}
function setCurDayBalance(){
  fechaBalancequeryDay = new Date();
  fechaBalance =getFormattoQueryBalance(fechaBalancequeryDay);
  var options = {  day:'numeric',year: 'numeric', month: 'long', };
  $("#diaBalance").text(fechaBalancequeryDay.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasDay=dominio+'/api/getBalanceHoras/"'+fechaBalance+'"/'+lector_serial_number;
  getBalanceHoras();

}

function pintaGraficaDiaBalance(datos){



AmCharts.makeChart("chartdivDiariaBalance",

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

    "balloonText": "<div style='margin:5px; font-size:12px;'>Balances:<b>[[Balance]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Balance]]",
    "lineAlpha": 0.3,
    "title": "Balance",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[balance]]',
    "labelPosition": "inside",
    "valueField": "balance"
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
      $('#curtainhorasBalance').css('visibility', 'hidden');
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




var fechaqueryMesBalance = new Date();
var fechaMesBalance =getFormattoQueryBalance(fechaqueryMesBalance);
//alert(fechaBalance);
var UrlBalanceBarrasMes=dominio+'/api/getBalanceDias/"'+fechaMesBalance+'"/'+lector_serial_number;



function getBalancesMensuales(){
  //showLoadingBalance('#curtainmensualesBalance');
  fetch(UrlBalanceBarrasMes)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS GRAFICA BATERIAS  POR DIAS")
    console.log(data)
    pintaGraficaMensualBalance(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function formateaFechasColumnasMensual() {

  var options = {  year: 'numeric', month: 'long', };
  $("#mesBalance").text(fechaqueryMesBalance.toLocaleDateString('es-ES', options));


}

function setMonthMoreBalance() {

  fechaqueryMesBalance = new Date(fechaqueryMesBalance.setMonth(fechaqueryMesBalance.getMonth()+1));
  fechaMesBalance=getFormattoQueryBalance(fechaqueryMesBalance);
  var options = {  year: 'numeric', month: 'long', };
  $("#mesBalance").text(fechaqueryMesBalance.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasMes=dominio+'/api/getBalanceDias/"'+fechaMesBalance+'"/'+lector_serial_number;
  getBalancesMensuales();

}
function setMonthMinusBalance() {


  fechaqueryMesBalance = new Date(fechaqueryMesBalance.setMonth(fechaqueryMesBalance.getMonth()-1));
  fechaMesBalance=getFormattoQueryBalance(fechaqueryMesBalance);
  var options = {  year: 'numeric', month: 'long', };
  $("#mesBalance").text(fechaqueryMesBalance.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasMes=dominio+'/api/getBalanceDias/"'+fechaMesBalance+'"/'+lector_serial_number;
  getBalancesMensuales();
}
function setCurMonthBalance(){
  fechaqueryMesBalance = new Date();
  fechaMesBalance =getFormattoQueryBalance(fechaqueryMesBalance);
  var options = {   year: 'numeric', month: 'long' };
  $("#mesBalance").text(fechaqueryMesBalance.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasMes=dominio+'/api/getBalanceDias/"'+fechaMesBalance+'"/'+lector_serial_number;
  getBalancesMensuales();

}




/*<!-- amCharts javascript code -->*/
function  pintaGraficaMensualBalance(datos){
  AmCharts.makeChart("chartdivMensualBalance",
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

       "balloonText": "<div style='margin:5px; font-size:12px;'>Balances:<b>[[balance]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Balance]]",
       "lineAlpha": 0.3,
       "title": "Balance",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[balance]]',
       "labelPosition": "inside",
       "valueField": "balance"
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
        $('#curtainmensualesBalance').css('visibility', 'hidden');
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




var fechaBalancequeryAno = new Date();
var fechaBalanceAno=getFormattoQueryBalance(fechaBalancequeryAno);
//alert(fechaBalance);
var UrlBalanceBarrasAno=dominio+'/api/getBalanceMeses/"'+fechaBalanceAno+'"/'+lector_serial_number;
//alert(UrlBalance);

var options = {  year: 'numeric'};
$("#anoBalance").text(fechaBalancequeryAno.toLocaleDateString('es-ES', options));







function getBalancesAnuales(){
  //showLoadingBalance('#curtainanualBalance');

  fetch(UrlBalanceBarrasAno)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA BATERIA POR MESES")
    console.log(data)
    pintaGraficaAnualBalance(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}


function setYearMoreBalance() {

  fechaBalancequeryAno = new Date(fechaBalancequeryAno.setFullYear(fechaBalancequeryAno.getFullYear()+1));
  fechaBalanceAno=getFormattoQueryBalance(fechaBalancequeryAno);
  var options = {  year: 'numeric' };
  $("#anoBalance").text(fechaBalancequeryAno.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasAno=dominio+'/api/getBalanceMeses/"'+fechaBalanceAno+'"/'+lector_serial_number;
  getBalancesAnuales();

}
function setYearMinusBalance() {


  fechaBalancequeryAno = new Date(fechaBalancequeryAno.setFullYear(fechaBalancequeryAno.getFullYear()-1));
  fechaBalanceAno=getFormattoQueryBalance(fechaBalancequeryAno);
  var options = {   year: 'numeric' };
  $("#anoBalance").text(fechaBalancequeryAno.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasAno=dominio+'/api/getBalanceMeses/"'+fechaBalanceAno+'"/'+lector_serial_number;
  getBalancesAnuales();
}
function setCurYearBalance(){
  fechaBalancequeryAno = new Date();
  fechaBalanceAno =getFormattoQueryBalance(fechaBalancequeryAno);
  var options = {  year: 'numeric' };
  $("#anoBalance").text(fechaBalancequeryAno.toLocaleDateString('es-ES', options));
  UrlBalanceBarrasAno=dominio+'/api/getBalanceMeses/"'+fechaBalanceAno+'"/'+lector_serial_number;
  getBalancesAnuales();

}




/*<!-- amCharts javascript code -->*/
function  pintaGraficaAnualBalance(datos){
  AmCharts.makeChart("chartdivAnualBalance",
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

    "balloonText": "<div style='margin:5px; font-size:12px;'>Balances:<b>[[balance]]</b></div>",
    "fillAlphas": 0.8,
    "labelText": "[[Balance]]",
    "lineAlpha": 0.3,
    "title": "Balance",
    "type": "column",
    "color": "#000000",
    "labelText" : '[[balance]]',
    "labelPosition": "inside",
    "valueField": "balance"
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
        $('#curtainanualBalance').css('visibility', 'hidden');
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




var fechaBalancequeryTotal = new Date();
var fechaBalanceTotal =getFormattoQueryBalance(fechaBalancequeryTotal);
//alert(fechaBalance);
var UrlBalanceBarrasTotal=dominio+'/api/getBalanceAnos/'+lector_serial_number;
//alert(UrlBalance);


function  getBalancesTotales(){

  fetch(UrlBalanceBarrasTotal)
  .then(function(response) {
    return response.json();

  })
  .then(function(data) {
    console.log("DATOS GRAFICA  POR AÑOS")
    pintaGraficaTotalBalance(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}






/*<!-- amCharts javascript code -->*/
function pintaGraficaTotalBalance(datos){
  AmCharts.makeChart("chartdivTotalBalance",
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

       "balloonText": "<div style='margin:5px; font-size:12px;'>Balances:<b>[[balance]]</b></div>",
       "fillAlphas": 0.8,
       "labelText": "[[Balance]]",
       "lineAlpha": 0.3,
       "title": "Balance",
       "type": "column",
       "color": "#000000",
       "labelText" : '[[balance]]',
       "labelPosition": "inside",
       "valueField": "balance"
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
function getFormattoQueryBalance (date) {
  return date.getFullYear()
  + "-"
  + ("0" + (date.getMonth() + 1)).slice(-2)
  + "-"
  + ("0" + date.getDate()).slice(-2);
}
