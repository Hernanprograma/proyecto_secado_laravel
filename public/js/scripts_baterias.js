var lector_serial_number= $('#lector_serial_number').val();


window.onload = function() {


  getFormattedDate();
  getFormattedDatePuntos ();
  traerdatos();
  getDatosGraficaBaterias();
  getDatosInstantaneoBaterias();
};


function getDatosInstantaneoBaterias(){
  var UrlDatosInstantaneoBaterias=dominio+'/api/getInstantaneoBateria/'+lector_serial_number;
  //alert(UrlEnergia);
  fetch(UrlDatosInstantaneoBaterias)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS BATERIA")
    console.log(data)
    pintarEstadoBateria(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}
function pintarEstadoBateria(datos){
  $( "#cap_battery" ).text(datos[0]['cap_battery']+'%');
  $( "#volt_bat" ).text(datos[0]['volt_bat']+'V');
  $( "#int_bat" ).text(datos[0]['int_bat']+'A');
  $( "#pot_bat" ).text(datos[0]['pot_bat']+'W');

var condicion=datos[0]['cap_battery'];
  switch (true) {
    case (condicion<=25):
    $("#cap_baterias").css('background-image', 'url(assets/img/baterias/bat_25.png)');//4
    break;
    case (condicion<=50):
    $("#cap_baterias").css('background-image', 'url(assets/img/baterias/bat_50.png)');//4
    break;
    case (condicion<=75):
    $("#cap_baterias").css('background-image', 'url(assets/img/baterias/bat_75.png)');//4
    break;
    case (condicion>75):
    $("#cap_baterias").css('background-image', 'url(assets/img/baterias/bat_100.png)');//4
    break;

  }


}






var fechaquery = new Date();
var fecha =getFormattoQuery(fechaquery);
//alert(fecha);
var UrlEnergiaBarras=dominio+'/api/getProducido/"'+fecha+'"/'+lector_serial_number;
//alert(UrlEnergia);


function traerdatos(){
  fetch(UrlEnergiaBarras)
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log("DATOS GRAFICA")
    console.log(data)
    pintargraficabarras(data);
  })
  .catch(function(err) {
    console.error(err);
  });
}



function setMonthMore() {

  fechaquery = new Date(fechaquery.setMonth(fechaquery.getMonth()+1));

  fecha=getFormattoQuery(fechaquery);
  var options = {  year: 'numeric', month: 'long', };
  $("#mes").text(fechaquery.toLocaleDateString('es-ES', options));
  UrlEnergiaBarras=dominio+'/api/getProducido/"'+fecha+'"/'+lector_serial_number;
  traerdatos();

}
function setMonthMinus() {


  fechaquery = new Date(fechaquery.setMonth(fechaquery.getMonth()-1));
  fecha=getFormattoQuery(fechaquery);
  var options = {  year: 'numeric', month: 'long', };
  $("#mes").text(fechaquery.toLocaleDateString('es-ES', options));
  UrlEnergiaBarras=dominio+'/api/getProducido/"'+fecha+'"/'+lector_serial_number;
  traerdatos();
}
function setCurMonth(){
   fechaquery = new Date();
   fecha =getFormattoQuery(fechaquery);
   var options = {  year: 'numeric', month: 'long', };
   $("#mes").text(fechaquery.toLocaleDateString('es-ES', options));
   UrlEnergiaBarras=dominio+'/api/getProducido/"'+fecha+'"/'+lector_serial_number;
   traerdatos();

}


//******************************************************************//
//************************** GRAFICAS*******************************//
//******************************************************************//

/*<!-- amCharts javascript code -->*/
function pintargraficabarras(datos){
    AmCharts.makeChart("chartdiv_test",
      {
        "type": "serial",
        "categoryField": "fecha",
        "angle": 30,
        "depth3D": 30,
        "startDuration": 1,
        "categoryAxis": {
          "gridPosition": "start"
        },
        "trendLines": [],
        "graphs": [
          {

              "balloonText": "<div style='margin:5px; font-size:12px;'>Producido:<b>[[producido]]</b></div>",
              "fillAlphas": 1,
              "id": "AmGraph-2",
              "title": "SOLAR",
              "type": "column",
              "valueField": "producido"

          },
          {
            "balloonText": "<div style='margin:5px; font-size:12px;'>Consumido:<b>[[consumido]]</b></div>",
            "fillAlphas": 1,
            "id": "AmGraph-1",
            "title": "BATERIAS",
            "type": "column",
            "valueField": "consumido"
          }
        ],
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

      var options = {  year: 'numeric', month: 'long', };
      $("#mes").text(fechaquery.toLocaleDateString('es-ES', options));

    }

    var datetoquery = new Date();
    var date = null;

    var UrlEnergia= dominio+'/api/getDataGraficaBateriasToday/'+lector_serial_number;


    function getDatosGraficaBaterias(){
      fetch(UrlEnergia)
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {

        console.log('data =',data);
        pintargraficapuntos(data);
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
        pintargraficapuntos(data);
      })
      .catch(function(err) {
        console.error(err);
      });
    }

    function setReportDate(valor) {


      var date;
      if (valor==1) {
        datetoquery = new Date(datetoquery.getTime() + 86400000);
        date=getFormattoQuery(datetoquery);
        $("#reportDate").val(datetoquery.toLocaleDateString());
        UrlEnergia= dominio+'/api/getDataGraficaBaterias/'+date+'/'+lector_serial_number;
        getDatosGraficaBaterias();

      }
      if (valor==-1) {

        datetoquery = new Date(datetoquery.getTime() - 86400000);
        date=getFormattoQuery(datetoquery);
        $("#reportDate").val(datetoquery.toLocaleDateString());
        UrlEnergia= dominio+'/api/getDataGraficaBaterias/'+date+'/'+lector_serial_number;
        getDatosGraficaBaterias();
      }

    }
    //******************************************************************//
    //************************** GRAFICAS*******************************//
    //******************************************************************//

    /*<!-- amCharts javascript code -->*/

    function pintargraficapuntos(datos){
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
            "valueAxis": "intensidad",
            "legendValueText": "[[intensidad]] A",
            "lineThickness" : 1.5,
            "fillAlphas": 0.1,
            "type":"smoothedLine",
            "id": "intensidad",
            "title": "Intensidad",
            "valueField": "intensidad",
            "balloonText": "<div style='margin:5px; font-size:11px;'>Intensidad:<b>[[intensidad]] </b>A</div>"
          },
          {
            "legendValueText": "[[tension]] V",
            "lineThickness" : 1.5,
            "valueAxis": "tension",
            "fillAlphas": 0.1,
            "type":"smoothedLine",
            "id": "tension",
            "title": "Tension",
            "valueField": "tension",
            "balloonText": "<div style='margin:5px; font-size:11px;'>Tension:<b>[[tension]]</b>V</div>"
          },
          {
            "legendValueText": "[[potencia]] W",
            "lineThickness" : 1.5,
            "valueAxis": "potencia",
            "fillAlphas": 0.1,
            "type":"smoothedLine",
            "id": "potencia",
            "title": "Potencia",
            "valueField": "potencia",
            "balloonText": "<div style='margin:5px; font-size:11px;'>Potencia:<b>[[potencia]] </b>W</div>"
          }

        ],

        "guides": [],
        "valueAxes": [{
        "id":"intensidad",
        "unit":"A",
        "axisColor": "#FF6600",
        "axisThickness": 2,
        "axisAlpha": 1,
        "position": "right"
    }, {
        "id":"tension",
        "unit":"V",
        "axisColor": "#FCD202",
        "axisThickness": 2,
        "axisAlpha": 1,
        "offset": 50,
        "position": "right"
    }, {
        "id":"potencia",
        "unit":"W",
        "axisColor": "#B0DE09",
        "axisThickness": 2,
        "gridAlpha": 0,
        "offset": 50,
        "axisAlpha": 1,
        "position": "left"
    }],
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

    function getFormattedDatePuntos () {
      $("#reportDate").val(datetoquery.toLocaleDateString());
    }
