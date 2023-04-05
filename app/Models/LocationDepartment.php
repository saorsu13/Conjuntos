<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationDepartment
 * 
 * @property int $location_department_id
 * @property int $location_id
 * @property int $department_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Department $department
 * @property Location $location
 *
 * @package App\Models
 */
class LocationDepartment extends Model
{
	protected $table = 'location_department';
	protected $primaryKey = 'location_department_id';

	protected $casts = [
		'location_id' => 'int',
		'department_id' => 'int'
	];

	protected $fillable = [
		'location_id',
		'department_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function location()
	{
		return $this->belongsTo(Location::class);
	}
}
