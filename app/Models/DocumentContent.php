<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentContent
 * 
 * @property int $document_content_id
 * @property int $document_id
 * @property int $document_field_id
 * @property int $version
 * @property string|null $content
 * @property string|null $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DocumentField $document_field
 * @property Document $document
 * @property Collection|DocumentChange[] $document_changes
 * @property Collection|DocumentComment[] $document_comments
 * @property Collection|DocumentLink[] $document_links
 *
 * @package App\Models
 */
class DocumentContent extends Model
{
	protected $table = 'document_contents';
	protected $primaryKey = 'document_content_id';

	protected $casts = [
		'document_id' => 'int',
		'document_field_id' => 'int',
		'version' => 'int'
	];

	protected $fillable = [
		'document_id',
		'document_field_id',
		'version',
		'content',
		'comment'
	];

	public function document_field()
	{
		return $this->belongsTo(DocumentField::class);
	}

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function document_changes()
	{
		return $this->hasMany(DocumentChange::class);
	}

	public function document_comments()
	{
		return $this->hasMany(DocumentComment::class);
	}

	public function document_links()
	{
		return $this->hasMany(DocumentLink::class);
	}
}
