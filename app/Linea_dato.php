<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_dato extends Model
{
    protected $fillable = [
  'fecha',
  'hora',
  'linea',
  'tt1',
  'tt2',
  'tt3',
  'tt4',
  'intensidad_total',
  'intensidad_tambor',
  'intensidad_ve2',
  'total_caudal_entrada_scruber',
  'total_caudal_salida_scruber',
  'caudal_recirc_scruber',
  'temp_aceite_entrada_tambor',
  'presion_salida_tambor',
  'presion_entrada_scruber',
  'presion_entrada_condensador',
  'presion_salida_condensador',
  'posicionvalvula_ve2',
  'posicionvalvula_purga',
  'presion_entrada_tambor',
  'variador_electrico',
  'variador_mecanico',
  'vueltas_bomba',
  'temp_aceite_ent_intercambiador',
  'temp_aceite_salida_inter',
  'temp_agua_entrada_condensador',
  'temp_agua_salida_condensador',
  'caudal_agua_a_condensador',
  'temp_agua_ent_torre',
  'temp_agua_sal_torre',
  'caudal_agua_a_torre',
  'temp_trabajo_verde',
  'temp_quemador_rojo',
  'presion_ent_biogas',
  'temp_aceite_ent_caldera_dysp',
  'temp_aceite_sal_caldera_dysp',
  'temp_humos_caldera_dysp',
  'presion_gas_ent_caldera_dysp',
  'presion_gas_sal_caldera_dysp',
  'porcentaje_ventilador_cal',
  'caudal_lampara',
  'valor_lampara_titanium',
  'dosificacion_sosa',
  'consumo_inst_biogas',
  'riqueza_biogas',
  'totalizador_biogas',
  'observaciones',
  'user_id',

  ];

    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
