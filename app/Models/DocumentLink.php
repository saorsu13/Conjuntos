<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentLink
 * 
 * @property int $document_link_id
 * @property int $document_id
 * @property int $version
 * @property int $document_content_id
 * @property string $name
 * @property string $link
 * @property string $type
 * @property string $size
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property DocumentContent $document_content
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentLink extends Model
{
	protected $table = 'document_links';
	protected $primaryKey = 'document_link_id';

	protected $casts = [
		'document_id' => 'int',
		'version' => 'int',
		'document_content_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'version',
		'document_content_id',
		'name',
		'link',
		'type',
		'size'
	];

	public function document_content()
	{
		return $this->belongsTo(DocumentContent::class);
	}

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
