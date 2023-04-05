<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Requisito
 * 
 * @property int $requisito_id
 * @property string $nombre
 * @property string $codigo
 * @property string $descripcion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Documento[] $documentos
 * @property Collection|PermisosSistema[] $permisos_sistemas
 *
 * @package App\Models
 */
class Requisito extends Model
{
	protected $table = 'requisitos';
	protected $primaryKey = 'requisito_id';
	public $incrementing = false;

	protected $casts = [
		'requisito_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'codigo',
		'descripcion'
	];

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}

	public function permisos_sistemas()
	{
		return $this->hasMany(PermisosSistema::class);
	}
}
