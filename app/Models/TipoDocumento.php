<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDocumento
 * 
 * @property int $tipo_documento_id
 * @property string $nombre
 * @property string $codigo_tipo_documento
 * @property string $categoria
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Documento[] $documentos
 *
 * @package App\Models
 */
class TipoDocumento extends Model
{
	protected $table = 'tipo_documentos';
	protected $primaryKey = 'tipo_documento_id';

	protected $fillable = [
		'nombre',
		'codigo_tipo_documento',
		'categoria'
	];

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}
}
