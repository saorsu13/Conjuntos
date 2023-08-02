<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $email
 * @property string|null $tipo_sangre
 * @property int|null $numero_cedula
 * @property int|null $numero_telefono
 * @property string|null $sexo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Mascota[] $mascotas
 * @property Collection|Paqueadero[] $paqueaderos
 * @property Collection|Vehiculo[] $vehiculos
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'personas';

	protected $casts = [
		'numero_cedula' => 'int',
		'numero_telefono' => 'int'
	];

	protected $fillable = [
		'nombre',
		'email',
		'tipo_sangre',
		'numero_cedula',
		'numero_telefono',
		'sexo'
	];

	public function mascotas()
	{
		return $this->hasMany(Mascota::class, 'id_propietario');
	}

	public function paqueaderos()
	{
		return $this->hasMany(Paqueadero::class, 'id_propietario');
	}

	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class, 'id_propietario');
	}
}
