<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 * 
 * @property int $position_id
 * @property int $pre_id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Department[] $departments
 * @property Collection|DocumentPosition[] $document_positions
 * @property Collection|Location[] $locations
 * @property Collection|User[] $users
 * @property Collection|ProcessPermission[] $process_permissions
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class Position extends Model
{
	protected $table = 'positions';
	protected $primaryKey = 'position_id';

	protected $casts = [
		'pre_id' => 'int'
	];

	protected $fillable = [
		'pre_id',
		'name',
		'description'
	];

	public function departments()
	{
		return $this->belongsToMany(Department::class)
					->withPivot('department_position_id')
					->withTimestamps();
	}

	public function document_positions()
	{
		return $this->hasMany(DocumentPosition::class, 'location_id');
	}

	public function locations()
	{
		return $this->belongsToMany(Location::class, 'location_position_user')
					->withPivot('location_position_user_id', 'user_id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(User::class)
					->withPivot('position_user_id')
					->withTimestamps();
	}

	public function process_permissions()
	{
		return $this->hasMany(ProcessPermission::class);
	}

	public function processes()
	{
		return $this->hasMany(Process::class);
	}
}
