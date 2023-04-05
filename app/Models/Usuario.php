<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $usuario_id
 * @property int $localizacion_id
 * @property string $activo
 * @property string $nombre
 * @property string $correo_electronico
 * @property string $contraseña
 * @property string $rol
 * @property string $cargo
 * @property string $localizacion_usuario
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Localizacione $localizacione
 * @property Collection|PermisosLocalizacione[] $permisos_localizaciones
 * @property Collection|PermisosSistema[] $permisos_sistemas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'usuario_id';

	protected $casts = [
		'localizacion_id' => 'int'
	];

	protected $fillable = [
		'localizacion_id',
		'activo',
		'nombre',
		'correo_electronico',
		'contraseña',
		'rol',
		'cargo',
		'localizacion_usuario'
	];

	public function localizacione()
	{
		return $this->belongsTo(Localizacione::class, 'localizacion_id');
	}

	public function permisos_localizaciones()
	{
		return $this->hasMany(PermisosLocalizacione::class);
	}

	public function permisos_sistemas()
	{
		return $this->hasMany(PermisosSistema::class);
	}
}
