<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTag
 * 
 * @property int $document_tags_id
 * @property int $document_id
 * @property string $tag
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentTag extends Model
{
	protected $table = 'document_tags';
	protected $primaryKey = 'document_tags_id';
	public $timestamps = false;

	protected $casts = [
		'document_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'tag'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
