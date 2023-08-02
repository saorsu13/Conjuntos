<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $tipo_mascota
 * @property string|null $raza_mascota
 * @property int|null $id_propietario
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Persona|null $persona
 *
 * @package App\Models
 */
class Mascota extends Model
{
	protected $table = 'mascotas';

	protected $casts = [
		'id_propietario' => 'int'
	];

	protected $fillable = [
		'nombre',
		'tipo_mascota',
		'raza_mascota',
		'id_propietario'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_propietario');
	}
}
