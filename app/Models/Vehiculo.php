<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $id
 * @property string|null $tipo_vehiculo
 * @property string|null $placa_vehiculo
 * @property string|null $cilindraje
 * @property int|null $id_propietario
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Persona|null $persona
 * @property Collection|Paqueadero[] $paqueaderos
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculos';

	protected $casts = [
		'id_propietario' => 'int'
	];

	protected $fillable = [
		'tipo_vehiculo',
		'placa_vehiculo',
		'cilindraje',
		'id_propietario'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_propietario');
	}

	public function paqueaderos()
	{
		return $this->hasMany(Paqueadero::class, 'id_vehiculo');
	}
}
