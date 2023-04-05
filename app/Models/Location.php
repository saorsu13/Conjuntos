<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 * 
 * @property int $location_id
 * @property string $code
 * @property string $name
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|DocumentPermission[] $document_permissions
 * @property Collection|Document[] $documents
 * @property Collection|Department[] $departments
 * @property Collection|Position[] $positions
 * @property Collection|User[] $users
 * @property Collection|Process[] $processes
 * @property Collection|ProcessPermission[] $process_permissions
 *
 * @package App\Models
 */
class Location extends Model
{
	protected $table = 'locations';
	protected $primaryKey = 'location_id';

	protected $fillable = [
		'code',
		'name',
		'description'
	];

	public function document_permissions()
	{
		return $this->hasMany(DocumentPermission::class);
	}

	public function documents()
	{
		return $this->hasMany(Document::class);
	}

	public function departments()
	{
		return $this->belongsToMany(Department::class, 'location_department')
					->withPivot('location_department_id')
					->withTimestamps();
	}

	public function positions()
	{
		return $this->belongsToMany(Position::class, 'location_position_user')
					->withPivot('location_position_user_id', 'user_id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'location_position_user')
					->withPivot('location_position_user_id', 'position_id')
					->withTimestamps();
	}

	public function processes()
	{
		return $this->belongsToMany(Process::class)
					->withPivot('location_process_id')
					->withTimestamps();
	}

	public function process_permissions()
	{
		return $this->hasMany(ProcessPermission::class);
	}
}
