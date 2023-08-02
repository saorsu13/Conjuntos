<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Edificio
 * 
 * @property int $id
 * @property string|null $direccion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Edificio extends Model
{
	protected $table = 'edificio';

	protected $fillable = [
		'direccion'
	];
}
