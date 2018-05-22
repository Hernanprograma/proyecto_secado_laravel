var lector_serial_number= $('#lector_serial_number').val();


window.onload = function() {
  getFormattedDate();




  getBalanceEnergia();
  getBalanceEnergiaDosDias();

  getDatosInstantaneos();
  getAlarmaRobo();
  getAlarmaFaultCode();
  getTotalKilovatios ();
  getDatosBurbuja();



  traerdatos();

  formateaFechasColumnasMensual();
  formateaFechasColumnasDiario();


  getConsumosMensuales();
  //getBateriasMensuales();






};

$(function(){
  $('#options').on('change', function(){
  var val = $(this).val();
  if(val === '2') {
    getBateriasMensuales();
  }
  else if(val === '3') {
    getBalancesMensuales()
  }
  })
  })


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
console.log("DATOS INSTANTANEOS")
console.log(datosActuales)
    paintdatosActuales(datosActuales);

  })
  .catch(function(err) {
    console.error(err);
  });
}

//******************************************************************//
//************************** DIBUJA LOS DATOS INSTANTANEOS EN EL DASHBOARD *********************//
//******************************************************************//
function paintdatosActuales (datosActuales) {

  $( "#consumo" ).text(datosActuales[0]['consumo']+'W');
  $('#progress-cons').css("width",datosActuales[0]['load_percent']+'%');
  $( "#cap_battery" ).text(datosActuales[0]['cap_battery']+'%');
  $('#progress-bat').css("width",datosActuales[0]['cap_battery']+'%');

  $( "#prod_sol" ).text(datosActuales[0]['prod_sol']+'W');
  $( "#carga_inv" ).text(datosActuales[0]['load_percent']+'%');

}

var UrlgetTotalKilovatios=dominio+'/api/getTotalKilovatios/'+lector_serial_number;

function getTotalKilovatios(){
  fetch(UrlgetTotalKilovatios)
  .then(function(response) {
    return response.json();
  })
  .then(function(datosKilovatios) {
    console.log("ACUMUADOS KV")
    console.log(datosKilovatios)
      paintTotalKilovatios(datosKilovatios);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function paintTotalKilovatios (datosKilovatios) {

  //$("#kw_diario").text(datosKilovatios[0]['kwh_producidos_pv_diario']+' kWh');
  $("#kw_mensual").text(datosKilovatios[0]['kwh_producidos_pv_mensual']+' kWh');
  $("#kw_anual").text(datosKilovatios[1]['kwh_producidos_pv_anual']+' kWh');

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
    console.log("ALARMA ROBOooooo")
    console.log(numAlarma);
    paintAlarmaRobo (numAlarma);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function paintAlarmaRobo (numAlarma) {

  if((numAlarma==0)||((numAlarma[0]['error_type']==50)&&(numAlarma[0]['text']=="Alama antirrobo OK"))){
    $("#alarma_robo").prepend("Sin Alarmas");
  }else{
    $("#alarma_robo").prepend("Consulte el estado de su equipo");
    $("#anomalia_robo_background").css('background', 'red');
  }

}

//******************************************************************//
//**************************OBTIENE EL ESTADO DE LA ALARMA DE ROBO*********************//
//******************************************************************//
var UrlsetAlarmaRobo=dominio+'/api/setAlarmaRobo/'+lector_serial_number;

function setAlarmaRobo(){
  fetch(UrlsetAlarmaRobo)
  .then(function(response) {
    return response.json();
  })
  .then(function(estado) {
    console.log("ALARMA RESETEO")
    console.log("RESET="+estado);

  })
  .catch(function(err) {
    console.error(err);
  });
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
    console.log("ALARMA FAULT_CODE");
    console.log(numAlarma);
    paintAlarmaFaultCode (numAlarma);
  })
  .catch(function(err) {
    console.error(err);
  });
}

function paintAlarmaFaultCode(numAlarma) {


  if (numAlarma[0]['fault_code']!=0){
  $("#anomalia_fault_code_background").css('background', 'red');//2
  }

  switch (numAlarma[0]['fault_code']) {
    case 0:

    alarma = "Equipo seguro: alarmas reseteadas";
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
var UrlBurbujas=dominio+'/api/getDatosBurbuja/'+lector_serial_number;

function getDatosBurbuja(){
  fetch(UrlBurbujas)
  .then(function(response) {
    return response.json();
  })
  .then(function(datosBurbuja) {
    paintBurbuja(datosBurbuja)
    console.log("VALORES BURBUJA")
    console.log(datosBurbuja)
  })
  .catch(function(err) {
    console.error(err);
  });
}

//******************************************************************//
//**************************OBTIENE EL MODO DE TRABAJO DEL EQUIPO*********************//
//******************************************************************//
var UrlWorkMode=dominio+'/api/getWorkMode/'+lector_serial_number;

function getWorkMode(){
  fetch(UrlWorkMode)
  .then(function(response) {
    return response.json();
  })
  .then(function(datos) {
    console.log("WORK MODE")
    console.log(datos)
    paintWorkMode(datos);
  })
  .catch(function(err) {
    console.error(err);
  });
}
//******************************************************************//
//************************** PINTA LAS BURBUJAS Y LOS DATOS *********************//
//******************************************************************//
function paintBurbuja (datosBurbuja) {

  $( "#buble_placas" ).text(datosBurbuja[0]['produccion_solar']+'W');
  $( "#buble_casa" ).text(datosBurbuja[0]['consumo']+'W');


  $( "#buble_red" ).text(datosBurbuja[0]['red']+'W');




  //Si hay consumo se enciende la imagen de la casa
  if(datosBurbuja[0]['consumo']>0){
    $("#home").css('background-image', 'url(assets/img/inverter/home_on.png)');//2
    if(datosBurbuja[0]['produccion_solar']>0){
      $("#placas_to_home").css('background-image', 'url(assets/img/inverter/placas_to_home_on.gif)');//9
    }
  }



  //Si carga la bateria se enciende imagen de la bateria
  //if(datosBurbuja[0]['carga_bateria']>0){
  if(datosBurbuja[0]['carga_bateria']>0){
      $( "#buble_batt_carga_descarga" ).append(datosBurbuja[0]['carga_bateria']+'W');
    $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4

  }
  //Si descarga la bateria se enciende imagen de la bateria
  if(datosBurbuja[0]['descarga_bateria']>0){
    $( "#buble_batt_carga_descarga" ).prepend('-'+datosBurbuja[0]['descarga_bateria']+'W');
    $("#bateria").css('background-image', 'url(assets/img/inverter/battery_on.png)');//4
    $("#batt_to_home").css('background-image', 'url(assets/img/inverter/batt_to_home_on.gif)');//10
  }

  //Si hay produccion solar
  if(datosBurbuja[0]['produccion_solar']>0){
    $("#placas").css('background-image', 'url(assets/img/inverter/placas_on.png)');//1
    if(datosBurbuja[0]['carga_bateria']>0){
            $("#placas_to_batt").css('background-image', 'url(assets/img/inverter/placas_to_batt_on.gif)');//6
    }
  }

  if(datosBurbuja[0]['red']>0){
      $("#red").css('background-image', 'url(assets/img/inverter/red_on.png)');//3
      $("#red_to_home").css('background-image', 'url(assets/img/inverter/red_to_home_on.gif)');
      $("#red_to_batt").css('background-image', 'url(assets/img/inverter/red_to_batt_on.gif)');

    }
  /*  si la bateria se esta descargando
  if(datosActuales[0]['batt_discharge_current']>=0){
  $("#batt_to_home").css('background-image', 'url(assets/img/inverter/batt_to_home_on.gif)');//10
}*/


}




//******************************************************************//
//************************** DIBUJA EL MODO DE TRABAJO DE LA INSTALACION(WORK_MODE) *********************//
//******************************************************************//
function paintWorkMode (workmode) {

switch (workmode[0]['work_mode']) {

  case 'P':
  mensaje = "MODO SOLAR";
  $("#work_mode").prepend(mensaje);
  break;
  case 'S':
  mensaje = "MODO STANDBY  ";
  $("#work_mode").prepend(mensaje);
  break;
  case 'L':
  mensaje = "MODO RED";
  $("#work_mode").prepend(mensaje);
  break;
  case 'B':
  mensaje = "MODO BATERIA ";
  $("#work_mode").prepend(mensaje);
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


// function getBalanceEnergia(){
//   console.log("empieza Balance");
//   fetch(UrlBalanceEnergia)
//   .then(function(response) {
//     return response.json();
//   })
//   .then(function(balances) {
//     console.log("BALANCES")
//     console.log(balances)
//     paintBalancesEnergia(balances);
//   })
//   .catch(function(err) {
//     console.error(err);
//   });
//
// }
var UrlBalanceEnergia=dominio+'/api/getBalanceEnergia/'+lector_serial_number;

function getBalanceEnergia(){
  var url  = UrlBalanceEnergia;
var xhr  = new XMLHttpRequest()
xhr.open('GET', url, true)
xhr.onload = function () {
	var balances = JSON.parse(xhr.responseText);
	if (xhr.readyState == 4 && xhr.status == "200") {
		console.table(balances);
    paintBalancesEnergia(balances);
	} else {
		console.error(balances);
	}
}
xhr.send(null);

}


function paintBalancesEnergia (balances) {
  var consumido=balances[0]["cons_hoy"];
  var generado=balances[0]["kwh_producidos_pv"];
  $("#kw_diario").text(generado +'kWh');
  $("#cons_hoy" ).prepend(consumido);
  $( "#gen_hoy" ).prepend(generado);
  $( "#bal_hoy" ).prepend((generado-consumido).toFixed(2));


}


var UrlBalanceEnergiaDosDias=dominio+'/api/getBalanceEnergiaDosDias/'+lector_serial_number;

function getBalanceEnergiaDosDias(){
  var url  = UrlBalanceEnergiaDosDias;
var xhr  = new XMLHttpRequest()
xhr.open('GET', url, true)
xhr.onload = function () {
	var balances = JSON.parse(xhr.responseText);
	if (xhr.readyState == 4 && xhr.status == "200") {
		console.table(balances);
    paintBalancesEnergiaDosDias(balances);
	} else {
		console.error(balances);
	}
}
xhr.send(null);

}


function paintBalancesEnergiaDosDias (balances) {

  $( "#bal_yest" ).prepend(balances[0]["bal_ayer"]);
  $( "#bal_two_day" ).prepend(balances[1]["bal_dos_dias"]);

}





var toalarma = new Date();
var fecha = null;
var UrlEnergia=dominio+'/api/getDataGraficaEnergiaToday/'+lector_serial_number;


function traerdatos(){
  fetch(UrlEnergia)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS GRAFICA")
    console.log(data)
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
    console.log("DATOS GRAFICA CON CLICK FECHA")
    console.log(data)
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
    "addClassNames": true,
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

      {

        "fillAlphas": 0.2,
        "legendValueText": "[[consumo]] W",
        "lineThickness" : 1.5,
        "type":"smoothedLine",
        "id": "consumo",
        "title": "Consumo",
        "lineColor": "#FF4500",
        "valueField": "consumo",
        "balloonText": "<div style='margin:5px; font-size:14px;'>Consumo:<b>[[consumo]]</b></div>"
      },

      {
        "fillAlphas": 0.2,
        "legendValueText": "[[produccion_solar]] W",
        "lineThickness" : 1.5,
        "type":"smoothedLine",
        "id": "produccion-solar",
        "title": "Produccion Solar",
        "lineColor": "#ADFF2F",
        "valueField": "produccion_solar",
        "balloonText": "<div style='margin:5px; font-size:12px;'>Producción Solar:<b>[[produccion_solar]]</b></div>"
      },
      {
        "fillAlphas": 0.2,
        "legendValueText": "[[red]] W",
        "lineThickness" : 1.5,
        "type":"smoothedLine",
        "id": "red",
        "title": "Red",
        "lineColor":"#FFD700",
        "valueField": "red",
        "balloonText": "<div style='margin:5px; font-size:12px;'>Red:<b>[[red]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "legendValueText": "[[descarga_bateria]] W",
        "lineThickness" : 1.5,
        "type":"smoothedLine",
        "id": "descarga_bateria",
        "title": "Descarga Bateria",
        "lineColor": "#4682B4",
        "valueField": "descarga_bateria",
        "balloonText": "<div style='margin:5px; font-size:12px;'>Descarga Bateria:<b>[[descarga_bateria]]</b></div>"
      },
      {
        "fillAlphas": 0.1,
        "legendValueText": "[[carga_bateria]] W",
        "lineThickness" : 1.5,
        "type":"smoothedLine",
        "id": "carga_bateria",
        "title": "Carga Bateria",
        "lineColor": "#0000FF",
        "valueField": "carga_bateria",
        "balloonText": "<div style='margin:5px; font-size:12px'>Carga bateria:<b>[[carga_bateria]]</b></div>"
      }

    ],

    "guides": [],
    "valueAxes": [],
    "allLabels": [


    ],
    "balloon": {},

    "legend": {
      "enabled": true


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
