<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Casa
 * 
 * @property int $id
 * @property string|null $numero_casa
 * @property bool|null $arrendado
 * @property bool|null $venta
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Casa extends Model
{
	protected $table = 'casas';

	protected $casts = [
		'arrendado' => 'bool',
		'venta' => 'bool'
	];

	protected $fillable = [
		'numero_casa',
		'arrendado',
		'venta'
	];
}
