<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationProcess
 * 
 * @property int $location_process_id
 * @property int $location_id
 * @property int $process_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Location $location
 * @property Process $process
 *
 * @package App\Models
 */
class LocationProcess extends Model
{
	protected $table = 'location_process';
	protected $primaryKey = 'location_process_id';

	protected $casts = [
		'location_id' => 'int',
		'process_id' => 'int'
	];

	protected $fillable = [
		'location_id',
		'process_id'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function process()
	{
		return $this->belongsTo(Process::class);
	}
}
