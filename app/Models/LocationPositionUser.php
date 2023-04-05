<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationPositionUser
 * 
 * @property int $location_position_user_id
 * @property int $user_id
 * @property int $position_id
 * @property int $location_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Location $location
 * @property Position $position
 * @property User $user
 *
 * @package App\Models
 */
class LocationPositionUser extends Model
{
	protected $table = 'location_position_user';
	protected $primaryKey = 'location_position_user_id';

	protected $casts = [
		'user_id' => 'int',
		'position_id' => 'int',
		'location_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'position_id',
		'location_id'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function position()
	{
		return $this->belongsTo(Position::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
