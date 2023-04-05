<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationPosition
 * 
 * @property int $location_position_id
 * @property int $location_id
 * @property int $position_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Location $location
 * @property Position $position
 *
 * @package App\Models
 */
class LocationPosition extends Model
{
	protected $table = 'location_position';
	protected $primaryKey = 'location_position_id';

	protected $casts = [
		'location_id' => 'int',
		'position_id' => 'int'
	];

	protected $fillable = [
		'location_id',
		'position_id'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function position()
	{
		return $this->belongsTo(Position::class);
	}
}
