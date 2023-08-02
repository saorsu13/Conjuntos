<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermisosLocalizacione
 * 
 * @property int $permisos_localizaciones_id
 * @property int $usuario_id
 * @property int $localizacion_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Localizacione $localizacione
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class PermisosLocalizacione extends Model
{
	protected $table = 'permisos_localizaciones';
	protected $primaryKey = 'permisos_localizaciones_id';

	protected $casts = [
		'usuario_id' => 'int',
		'localizacion_id' => 'int'
	];

	protected $fillable = [
		'usuario_id',
		'localizacion_id'
	];

	public function localizacione()
	{
		return $this->belongsTo(Localizacione::class, 'localizacion_id');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
