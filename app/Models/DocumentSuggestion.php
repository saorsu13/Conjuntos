<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentSuggestion
 * 
 * @property int $document_suggestion_id
 * @property int $user_id
 * @property int $system_id
 * @property string $document
 * @property string $justification
 * @property string|null $name
 * @property string|null $filename
 * @property string|null $mimetype
 * @property int|null $size
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class DocumentSuggestion extends Model
{
	protected $table = 'document_suggestions';
	protected $primaryKey = 'document_suggestion_id';

	protected $casts = [
		'user_id' => 'int',
		'system_id' => 'int',
		'size' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'system_id',
		'document',
		'justification',
		'name',
		'filename',
		'mimetype',
		'size',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
