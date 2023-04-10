<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proceso
 * 
 * @property int $proceso_id
 * @property string $codigo
 * @property string $nombre
 * @property int $departamento_id
 * @property int $localizacion_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Departamento $departamento
 * @property Localizacione $localizacione
 * @property Collection|Documento[] $documentos
 *
 * @package App\Models
 */
class Proceso extends Model
{
	protected $table = 'procesos';
	protected $primaryKey = 'proceso_id';

	protected $casts = [
		'departamento_id' => 'int',
		'localizacion_id' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'departamento_id',
		'localizacion_id'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class);
	}

	public function localizacione()
	{
		return $this->belongsTo(Localizacione::class, 'localizacion_id');
	}

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}
}
