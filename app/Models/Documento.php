<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 * 
 * @property int $documento_id
 * @property int $requisito_id
 * @property int $departamento_id
 * @property int $proceso_id
 * @property int $tipo_documento_id
 * @property int $localizacion_id
 * @property string $codigo
 * @property string $nombre
 * @property string $version
 * @property string $responsable_editar_id
 * @property string $responsable_revisar_id
 * @property string $responsable_aprobar_id
 * @property string $etiqueta_id
 * @property string|null $descripcion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Departamento $departamento
 * @property Localizacione $localizacione
 * @property Proceso $proceso
 * @property Requisito $requisito
 * @property TipoDocumento $tipo_documento
 *
 * @package App\Models
 */
class Documento extends Model
{
	protected $table = 'documentos';
	protected $primaryKey = 'documento_id';

	protected $casts = [
		'requisito_id' => 'int',
		'departamento_id' => 'int',
		'proceso_id' => 'int',
		'tipo_documento_id' => 'int',
		'localizacion_id' => 'int'
	];

	protected $fillable = [
		'requisito_id',
		'departamento_id',
		'proceso_id',
		'tipo_documento_id',
		'localizacion_id',
		'codigo',
		'nombre',
		'version',
		'responsable_editar_id',
		'responsable_revisar_id',
		'responsable_aprobar_id',
		'etiqueta_id',
		'descripcion'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class);
	}

	public function localizacione()
	{
		return $this->belongsTo(Localizacione::class, 'localizacion_id');
	}

	public function proceso()
	{
		return $this->belongsTo(Proceso::class);
	}

	public function requisito()
	{
		return $this->belongsTo(Requisito::class);
	}

	public function tipo_documento()
	{
		return $this->belongsTo(TipoDocumento::class);
	}
}
