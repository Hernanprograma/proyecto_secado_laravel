


window.onload = function() {

getDatosInstantaneos()
initCirclePercentage();
}

function initCirclePercentage(){

          $('#centrifuga').easyPieChart({
          lineWidth: 6,
          size: 160,
          scaleColor: false,
          trackColor: 'rgba(255,255,255,.25)',
          barColor: '#FFFFFF',
          animate: ({duration: 1000, enabled: true})

          });


  };





//******************************************************************//
//**************************OBTIENE LOS DATOS INSTANTANEOS PARA EL DASHBOARD*********************//
//******************************************************************//
var Urldatos=dominio+'/api/homedata';


function getDatosInstantaneos(){
  fetch(Urldatos)
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
