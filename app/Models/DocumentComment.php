<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentComment
 * 
 * @property int $document_comment_id
 * @property int $document_id
 * @property int $version
 * @property int $document_content_id
 * @property int $user_id
 * @property string $action
 * @property string $comment
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property DocumentContent $document_content
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentComment extends Model
{
	protected $table = 'document_comments';
	protected $primaryKey = 'document_comment_id';

	protected $casts = [
		'document_id' => 'int',
		'version' => 'int',
		'document_content_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'version',
		'document_content_id',
		'user_id',
		'action',
		'comment'
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
