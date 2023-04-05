<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentRecord
 * 
 * @property int $document_record_id
 * @property int $document_id
 * @property string $name
 * @property string|null $content
 * @property int $author_id
 * @property string $author_name
 * @property string|null $author_position
 * @property string|null $filename
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentRecord extends Model
{
	protected $table = 'document_records';
	protected $primaryKey = 'document_record_id';

	protected $casts = [
		'document_id' => 'int',
		'author_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'name',
		'content',
		'author_id',
		'author_name',
		'author_position',
		'filename'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
