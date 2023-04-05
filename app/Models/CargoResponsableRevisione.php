<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CargoResponsableRevisione
 * 
 * @property int $cargo_responsable_revision_id
 * @property int $departamento
 * @property string $cargo_edita_id
 * @property string $cargo_revisa_id
 * @property string $cargo_aprueba_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CargoResponsableRevisione extends Model
{
	protected $table = 'cargo_responsable_revisiones';
	protected $primaryKey = 'cargo_responsable_revision_id';
	public $incrementing = false;

	protected $casts = [
		'cargo_responsable_revision_id' => 'int',
		'departamento' => 'int'
	];

	protected $fillable = [
		'departamento',
		'cargo_edita_id',
		'cargo_revisa_id',
		'cargo_aprueba_id'
	];
}
