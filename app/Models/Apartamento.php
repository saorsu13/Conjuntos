<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Apartamento
 * 
 * @property int $id
 * @property int|null $numero_apartamento
 * @property string|null $descripcion
 * @property bool|null $arrendando
 * @property bool|null $venta
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Apartamento extends Model
{
	protected $table = 'apartamento';

	protected $casts = [
		'numero_apartamento' => 'int',
		'arrendando' => 'bool',
		'venta' => 'bool'
	];

	protected $fillable = [
		'numero_apartamento',
		'descripcion',
		'arrendando',
		'venta'
	];
}
