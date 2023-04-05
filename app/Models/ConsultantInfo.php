<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsultantInfo
 * 
 * @property int $consultant_infos_id
 * @property string $name
 * @property string $work_position
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ConsultantInfo extends Model
{
	protected $table = 'consultant_infos';
	protected $primaryKey = 'consultant_infos_id';

	protected $fillable = [
		'name',
		'work_position',
		'description'
	];
}
