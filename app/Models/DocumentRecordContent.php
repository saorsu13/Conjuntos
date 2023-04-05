<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentRecordContent
 * 
 * @property int $document_record_contents_id
 * @property int $document_id
 * @property int $version
 * @property string|null $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentRecordContent extends Model
{
	protected $table = 'document_record_contents';
	protected $primaryKey = 'document_record_contents_id';

	protected $casts = [
		'document_id' => 'int',
		'version' => 'int'
	];

	protected $fillable = [
		'document_id',
		'version',
		'content'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
