<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTracing
 * 
 * @property int $id
 * @property int $document_id
 * @property int $user_id
 * @property string $trace
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentTracing extends Model
{
	protected $table = 'document_tracing';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'trace'
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
