<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentPosition
 * 
 * @property int $document_position_id
 * @property int $process_id
 * @property int $location_id
 * @property string $code
 * @property int $position_edit_id
 * @property int $position_review_id
 * @property int $position_approve_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Position $position
 * @property Process $process
 *
 * @package App\Models
 */
class DocumentPosition extends Model
{
	protected $table = 'document_positions';
	protected $primaryKey = 'document_position_id';

	protected $casts = [
		'process_id' => 'int',
		'location_id' => 'int',
		'position_edit_id' => 'int',
		'position_review_id' => 'int',
		'position_approve_id' => 'int'
	];

	protected $fillable = [
		'process_id',
		'location_id',
		'code',
		'position_edit_id',
		'position_review_id',
		'position_approve_id'
	];

	public function position()
	{
		return $this->belongsTo(Position::class, 'location_id');
	}

	public function process()
	{
		return $this->belongsTo(Process::class);
	}
}
