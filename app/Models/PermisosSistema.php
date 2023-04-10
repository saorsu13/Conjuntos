<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermisosSistema
 * 
 * @property int $permiso_sistema_id
 * @property int $usuario_id
 * @property int $requisito_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Requisito $requisito
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class PermisosSistema extends Model
{
	protected $table = 'permisos_sistemas';
	protected $primaryKey = 'permiso_sistema_id';

	protected $casts = [
		'usuario_id' => 'int',
		'requisito_id' => 'int'
	];

	protected $fillable = [
		'usuario_id',
		'requisito_id'
	];

	public function requisito()
	{
		return $this->belongsTo(Requisito::class);
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
