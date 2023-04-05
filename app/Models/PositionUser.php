<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PositionUser
 * 
 * @property int $position_user_id
 * @property int $user_id
 * @property int $position_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Position $position
 * @property User $user
 *
 * @package App\Models
 */
class PositionUser extends Model
{
	protected $table = 'position_user';
	protected $primaryKey = 'position_user_id';

	protected $casts = [
		'user_id' => 'int',
		'position_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'position_id'
	];

	public function position()
	{
		return $this->belongsTo(Position::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
