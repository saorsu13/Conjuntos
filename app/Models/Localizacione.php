<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Localizacione
 * 
 * @property int $localizacion_id
 * @property int $numero
 * @property string $codigo
 * @property string $nombre
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PermisosLocalizacione[] $permisos_localizaciones
 * @property Collection|Proceso[] $procesos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Localizacione extends Model
{
	protected $table = 'localizaciones';
	protected $primaryKey = 'localizacion_id';

	protected $casts = [
		'numero' => 'int'
	];

	protected $fillable = [
		'numero',
		'codigo',
		'nombre'
	];

	public function permisos_localizaciones()
	{
		return $this->hasMany(PermisosLocalizacione::class, 'localizacion_id');
	}

	public function procesos()
	{
		return $this->hasMany(Proceso::class, 'localizacion_id');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'localizacion_id');
	}
}
