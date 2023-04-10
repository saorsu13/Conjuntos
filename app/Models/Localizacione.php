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
 * @property string $codigo
 * @property string $nombre
 * @property string|null $descripcion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Documento[] $documentos
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

	protected $fillable = [
		'codigo',
		'nombre',
		'descripcion'
	];

	public function documentos()
	{
		return $this->hasMany(Documento::class, 'localizacion_id');
	}

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
