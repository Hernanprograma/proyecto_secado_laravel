


window.onload = function() {
  initCirclePercentage();

getDatosInstantaneos();

}

function initCirclePercentage(){

          $('#centrifuga_a, #centrifuga_b, #centrifuga_c, #coogeneracion').easyPieChart({
          lineWidth: 6,
          size: 160,
          scaleColor: false,
          trackColor: 'rgba(255,255,255,.25)',
          barColor: '#FFFFFF',
          animate: ({duration: 5000, enabled: true})

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


  $('#nivel_seco_a').text(datosActuales[0]['nivel_seco_a']+'%');
  $('#nivel_seco_b').text(datosActuales[0]['nivel_seco_b']+'%');
  $('#silo_nuevo').text(datosActuales[0]['silo_nuevo']);
  $('#silo_almacen').text(datosActuales[0]['silo_almacen']);
  $('#digestor').text(datosActuales[0]['digestor']+'cm');
  $('#tolva_recepcion').text(datosActuales[0]['tolva_recepcion']);
  $('#gas').text(datosActuales[0]['gas']);
  $('#linea_a').text(datosActuales[0]['linea_a']);
  $('#linea_b').text(datosActuales[0]['linea_a']);
  $('#centrifuga_a').append (datosActuales[0]['centrifuga_a']);
  $('#centrifuga_b').append(datosActuales[0]['centrifuga_b']);
  $('#centrifuga_c').append(datosActuales[0]['centrifuga_c']);
  $('#created_at').text(datosActuales[0]['created_at']);


};
