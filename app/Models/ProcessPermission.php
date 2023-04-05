<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProcessPermission
 * 
 * @property int $process_permissions_id
 * @property int $process_id
 * @property int $position_id
 * @property int $location_id
 * @property int $permission
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Location $location
 * @property Position $position
 * @property Process $process
 *
 * @package App\Models
 */
class ProcessPermission extends Model
{
	protected $table = 'process_permissions';
	protected $primaryKey = 'process_permissions_id';

	protected $casts = [
		'process_id' => 'int',
		'position_id' => 'int',
		'location_id' => 'int',
		'permission' => 'int'
	];

	protected $fillable = [
		'process_id',
		'position_id',
		'location_id',
		'permission'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function position()
	{
		return $this->belongsTo(Position::class);
	}

	public function process()
	{
		return $this->belongsTo(Process::class);
	}
}
