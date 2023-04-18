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
 * @property int|null $localizacion_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $localizaciones_dptos
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cargo[] $cargos
 * @property Collection|Documento[] $documentos
 * @property Collection|Proceso[] $procesos
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'departamento_id';

	protected $casts = [
		'localizacion_id' => 'int'
	];

	protected $fillable = [
		'localizacion_id',
		'nombre',
		'descripcion',
		'localizaciones_dptos'
	];

	public function cargos()
	{
		return $this->hasMany(Cargo::class, 'id_departamento');
	}

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}

	public function procesos()
	{
		return $this->hasMany(Proceso::class);
	}
}
