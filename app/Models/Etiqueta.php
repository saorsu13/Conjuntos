<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Etiqueta
 * 
 * @property int $etiqueta_id
 * @property string $grupo
 * @property string $nombre
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Etiqueta extends Model
{
	protected $table = 'etiquetas';
	protected $primaryKey = 'etiqueta_id';
	public $incrementing = false;

	protected $casts = [
		'etiqueta_id' => 'int'
	];

	protected $fillable = [
		'grupo',
		'nombre'
	];
}
