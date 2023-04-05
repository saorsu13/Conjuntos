<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentPosition
 * 
 * @property int $department_position_id
 * @property int $department_id
 * @property int $position_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Department $department
 * @property Position $position
 *
 * @package App\Models
 */
class DepartmentPosition extends Model
{
	protected $table = 'department_position';
	protected $primaryKey = 'department_position_id';
	protected $connection = 'teneant';


	protected $casts = [
		'department_id' => 'int',
		'position_id' => 'int'
	];

	protected $fillable = [
		'department_id',
		'position_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function position()
	{
		return $this->belongsTo(Position::class);
	}
}
