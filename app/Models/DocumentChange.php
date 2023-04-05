<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentChange
 * 
 * @property int $document_change_id
 * @property int $document_id
 * @property int $user_id
 * @property int $version
 * @property int $document_content_id
 * @property string $text
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property DocumentContent $document_content
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentChange extends Model
{
	protected $table = 'document_changes';
	protected $primaryKey = 'document_change_id';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int',
		'version' => 'int',
		'document_content_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'version',
		'document_content_id',
		'text'
	];

	public function document_content()
	{
		return $this->belongsTo(DocumentContent::class);
	}

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
