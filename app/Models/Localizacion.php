<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Localizacion
 * 
 * @property int $localizacion_id
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PermisosLocalizacion[] $permisos_localizacion
 * @property Collection|Proceso[] $procesos
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Localizacion extends Model
{
	protected $table = 'Localizaciones';
	protected $primaryKey = 'localizacion_id';


	protected $fillable = [
		'codigo',
		'nombre',
		'descripcion'
	];

	public function permisos_localizacion()
	{
		return $this->hasMany(PermisosLocalizacion::class, 'localizacion_id');
	}

	public function procesos()
	{
		return $this->hasMany(Proceso::class, 'localizacion_id');
	}

	public function usuarios()
	{
		return $this->hasMany(User::class, 'localizacion_id');
	}
	public function documentos()
	{
		return $this->hasMany(Documento::class, 'localizacion_id');
	}

}
