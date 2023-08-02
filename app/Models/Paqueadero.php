<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paqueadero
 * 
 * @property int $id
 * @property string|null $numero_parqueadero
 * @property string|null $descripcion
 * @property int|null $id_propietario
 * @property int|null $id_vehiculo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Persona|null $persona
 * @property Vehiculo|null $vehiculo
 *
 * @package App\Models
 */
class Paqueadero extends Model
{
	protected $table = 'paqueaderos';

	protected $casts = [
		'id_propietario' => 'int',
		'id_vehiculo' => 'int'
	];

	protected $fillable = [
		'numero_parqueadero',
		'descripcion',
		'id_propietario',
		'id_vehiculo'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_propietario');
	}

	public function vehiculo()
	{
		return $this->belongsTo(Vehiculo::class, 'id_vehiculo');
	}
}
