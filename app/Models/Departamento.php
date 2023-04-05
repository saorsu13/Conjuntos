<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $departamentos_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $localizaciones_dptos
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Documento[] $documentos
 * @property Collection|Proceso[] $procesos
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'departamentos_id';
	public $incrementing = false;

	protected $casts = [
		'departamentos_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'localizaciones_dptos'
	];

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}

	public function procesos()
	{
		return $this->hasMany(Proceso::class);
	}
}
