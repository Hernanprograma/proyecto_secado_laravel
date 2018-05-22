var lector_serial_number= $('#lector_serial_number').val();
var dominio='http://localhost:8000';
//******************************************************************//
//**************************OBTIENE LOS DATOS INSTANTANEOS PARA EL DASHBOARD*********************//
//******************************************************************//
var UrlEnergiaNow=dominio+'/api/getDatosInstantaneos/'+lector_serial_number;


function getDatosInstantaneos(){
  fetch(UrlEnergiaNow)
  .then(function(response) {

    return response.json();
  })
  .then(function(datosActuales) {

    paintdatosActuales(datosActuales);
    paintEstado(datosActuales);
  })
  .catch(function(err) {
    console.error(err);
  });
}

//******************************************************************//
//************************** DIBUJA LOS DATOS INSTANTANEOS EN EL DASHBOARD *********************//
//******************************************************************//
function paintdatosActuales (datosActuales) {
  console.log(datosActuales);

  $( "#consumo" ).prepend(datosActuales[0]['consumo']);
  $( "#batt_discharge_current" ).prepend(datosActuales[0]['batt_discharge_current']);
  $( "#cap_battery" ).prepend(datosActuales[0]['cap_battery']);
  $( "#carga_inv" ).prepend(datosActuales[0]['carga_inv']);
  $( "#l_percent" ).prepend(datosActuales[0]['l_percent']);
  $( "#l_va" ).prepend(datosActuales[0]['l_va']);
  $( "#l_wat" ).prepend(datosActuales[0]['l_watt']);
  $( "#v_batt" ).prepend(datosActuales[0]['v_batt']);
  $( "#prod_sol" ).prepend(datosActuales[1]['prod_sol']);




}




var UrlgetTotalKilovatios=dominio+'/api/getTotalKilovatios/'+lector_serial_number;


function getTotalKilovatios(){
  fetch(UrlgetTotalKilovatios)
  .then(function(response) {
    return response.json();
  })
  .then(function(datosKilovatios) {
    paintTotalKilovatios(datosKilovatios);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function paintTotalKilovatios (datosKilovatios) {

  $("#kw_diario").prepend(datosKilovatios[0]['diario']);
  $("#kw_mensual").prepend(datosKilovatios[1]['mensual']);
  $("#kw_anual").prepend(datosKilovatios[2]['anual']);

}


//******************************************************************//
//**************************OBTIENE EL ESTADO DE LA ALARMA DE ROBO*********************//
//******************************************************************//
var UrlAlarmaRobo=dominio+'/api/getAlarmaRobo/'+lector_serial_number;

function getAlarmaRobo(){
  fetch(UrlAlarmaRobo)
  .then(function(response) {
    return response.json();
  })
  .then(function(numAlarma) {
    console.log(numAlarma);
    paintAlarmaRobo(numAlarma);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function paintAlarmaRobo (numAlarma) {


  switch (numAlarma) {
    case 0:
    alarma = "Sin alarmas";
    $("#alarma_robo").prepend(alarma);
    break;
    case 1:
    alarma = "Alarma robo activada  ";
    $("#alarma_robo").prepend(alarma);
    break;

  }


}
//******************************************************************//
//**************************OBTIENE EL ESTADO DE LA ALARMA DE ROBO*********************//
//******************************************************************//
var UrlAlarmaFaultCode=dominio+'/api/getAlarmaFaultCode/'+lector_serial_number;

function getAlarmaFaultCode(){
  fetch(UrlAlarmaFaultCode)
  .then(function(response) {
    return response.json();
  })
  .then(function(numAlarma) {
    paintAlarmaFaultCode(numAlarma);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function paintAlarmaFaultCode (numAlarma) {


  switch (numAlarma[0]['fault_code']) {
    case 0:
    alarma = "Sin alarmas";
    $("#alarma_fault_code").prepend(alarma);
    break;
    case 1:
    alarma = "Alarma 1  ";
    $("#alarma_fault_code").prepend(alarma);
    break;
    case 2:
    alarma = "Alarma 2";
    $("#alarma_fault_code").prepend(alarma);
    break;
    case 3:
    alarma = "Alarma 3  ";
    $("#alarma_fault_code").prepend(alarma);
    break;
    case 4:
    alarma = "Alarma 4  ";
    $("#alarma_fault_code").prepend(alarma);
    break;
    case 5:
    alarma = "Alarma 5  ";
    $("#alarma_fault_code").prepend(alarma);
    break;


  }


}




//******************************************************************//
//************************** DIBUJA EL MODO DE TRABAJO DE LA INSTALACION(WORK_MODE) *********************//
//******************************************************************//
function paintEstado (datosActuales) {
$( "#buble_placas" ).prepend(datosActuales[1]['prod_sol']);
$( "#buble_casa" ).prepend(datosActuales[0]['consumo']);
$( "#buble_red" ).prepend(datosActuales[0]['voltage_out']);
$( "#buble_batt" ).prepend(datosActuales[0]['cap_battery']);




  console.log(datosActuales);
  //Si hay consumo se enciende la imagen de la casa
  if(datosActuales[0]['consumo']>=0){
    $("#home").css('background-image', 'url(assets/img/inverter/home_on.png)');//2
    if(datosActuales[1]['prod_sol']>=0){
      $("#placas_to_home").css('background-image', 'url(assets/img/inverter/placas_to_home_on.gif)');//9
    }
  }
  //Si carga la bateria se enciende imagen de la bateria
  if(datosActuales[0]['b_charge_current']>=0){
    $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4
  }
  //Si carga la bateria se enciende imagen de la bateria
  if(datosActuales[0]['b_charge_current']>=0){
    $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4
  }
  //Si hay produccion solar
  if(datosActuales[1]['prod_sol']>=0){
    $("#placas").css('background-image', 'url(assets/img/inverter/placas_on.png)');//1
  }
  /*  si la bateria se esta descargando
  if(datosActuales[0]['batt_discharge_current']>=0){
  $("#batt_to_home").css('background-image', 'url(assets/img/inverter/batt_to_home_on.gif)');//10
}*/







switch (datosActuales[0]['work_mode']) {

  case 'P':
  mensaje = "MODO SOLAR";
  $("#work_mode").prepend(mensaje);
  /*  $("#home").css('background-image', 'url(assets/img/inverter/home_on.png)');//2
  $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4
  $("#placas").css('background-image', 'url(assets/img/inverter/placas_on.png)');//1*/
  $("#placas_to_home").css('background-image', 'url(assets/img/inverter/placas_to_home_on.gif)');//9
  $("#placas_to_batt").css('background-image', 'url(assets/img/inverter/placas_to_batt_on.gif)');//6
  $("#batt_to_home").css('background-image', 'url(assets/img/inverter/batt_to_home_on.gif)');//10
  break;
  case 'S':
  mensaje = "MODO STANDBY  ";
  $("#work_mode").prepend(mensaje);
  break;
  case 'L':
  mensaje = "MODO RED";
  $("#work_mode").prepend(mensaje);
  $("#red_to_batt").css('background-image', 'url(assets/img/inverter/red_to_batt_on.gif)');//7

  /*   $("#red").css('background-image', 'url(assets/img/inverter/red_on.png)');//3

  $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4*/

  break;
  case 'B':
  mensaje = "MODO BATERIA ";
  $("#work_mode").prepend(mensaje);
  $("#batt_to_home").css('background-image', 'url(assets/img/inverter/batt_to_home_on.gif)');//10*/
  $("#placas_to_batt").css('background-image', 'url(assets/img/inverter/placas_to_batt_on.gif)');//6
  /*  $("#home").css('background-image', 'url(assets/img/inverter/home_on.png)');//2
  $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4*/

  break;
  case 'F':
  mensaje = "MODO FALLO  ";
  $("#work_mode").prepend(mensaje);
  break;
  case 'H':
  mensaje = "MODO AHORRO DE ENERGIA  ";
  $("#work_mode").prepend(mensaje);
  break;



}



}


//******************************************************************//
//**************************OBTIENE BALANCES DE ENERGIA*********************//
//******************************************************************//
var UrlBalanceEnergia=dominio+'/api/getBalanceEnergia/'+lector_serial_number;

function getBalanceEnergia(){
  fetch(UrlBalanceEnergia)
  .then(function(response) {
    return response.json();
  })
  .then(function(balances) {
    console.log(balances);
    paintBalancesEnergia(balances);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function paintBalancesEnergia (balances) {

  $( "#cons_hoy" ).prepend(balances[0]["kwh_consumidos"]);
  $( "#gen_hoy" ).prepend(balances[0]["kwh_producidos_pv"]);
  $( "#bal_hoy" ).prepend('2560');
  $( "#bal_yest" ).prepend('2220');
  $( "#bal_three_alarmas" ).prepend('6627');

}





window.onload = function() {
  getFormattedDate();
  traerdatos();
  getDatosInstantaneos();
  getTotalKilovatios ();
  getAlarmaRobo();
  getAlarmaFaultCode();
  getBalanceEnergia();



};
var toalarma = new Date();
var fecha = null;
var UrlEnergia=dominio+'/api/getDataGraficaEnergiaToday/'+lector_serial_number;


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
    UrlEnergia=dominio+'/api/getDataGraficaEnergia/'+fecha+'/'+lector_serial_number;
    traerdatos();

  }
  if (valor==-1) {

    toalarma = new Date(toalarma.getTime() - 86400000);
    fecha=getFormattoQuery(toalarma);
    $("#reportDate").val(toalarma.toLocaleDateString());
    UrlEnergia=dominio+'/api/getDataGraficaEnergia/'+fecha+'/'+lector_serial_number;
    traerdatos();
  }

}
//******************************************************************//
//************************** GRAFICAS*******************************//
//******************************************************************//

/*<!-- amCharts javascript code -->*/

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
        "id": "carga_bateria",
        "title": "Carga Bateria",
        "valueField": "value1",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Carga bateria:<b>[[value1]]</b></div>"


      },
      {
        "fillAlphas": 0.1,
        "id": "produccion-solar",
        "title": "Produccion Solar",
        "valueField": "value2",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Producción Solar:<b>[[value2]]</b></div>"
      },
      {

        "fillAlphas": 0.1,
        "id": "consumo",
        "title": "Consumo",
        "valueField": "value3",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Consumo:<b>[[value3]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "id": "descarga_bateria",
        "title": "Descarga Bateria",
        "valueField": "value4",
        "balloonText": "<div style='margin:5px; font-size:11px;'>Descarga Bateria:<b>[[value4]]</b></div>"
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
