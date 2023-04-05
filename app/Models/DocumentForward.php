<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentForward
 * 
 * @property int $document_forward_id
 * @property int $document_id
 * @property int $user_id
 * @property string $action
 * @property string $position
 * @property Carbon $deadline
 * @property int $checked
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentForward extends Model
{
	protected $table = 'document_forwards';
	protected $primaryKey = 'document_forward_id';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int',
		'deadline' => 'date',
		'checked' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'action',
		'position',
		'deadline',
		'checked'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
