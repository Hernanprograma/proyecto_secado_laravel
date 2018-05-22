var lector_serial_number= $('#lector_serial_number').val();

window.onload = function() {


  getFormattedDate();
  getDatosGraficaBaterias();



};
//var lector_serial_number=1823531907;

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
  $("#reportDate").val(datetoquery.toLocaleDateString());
}
