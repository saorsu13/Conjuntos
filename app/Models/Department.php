<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $department_id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Position[] $positions
 * @property Collection|Location[] $locations
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	protected $primaryKey = 'department_id';
	protected $connection = 'tenant';

	protected $fillable = [
		'name',
		'description'
	];

	public function positions()
	{
		return $this->belongsToMany(Position::class)
					->withPivot('department_position_id')
					->withTimestamps();
	}

	public function locations()
	{
		return $this->belongsToMany(Location::class, 'location_department')
					->withPivot('location_department_id')
					->withTimestamps();
	}
}
