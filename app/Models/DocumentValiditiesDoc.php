<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentValiditiesDoc
 * 
 * @property int $document_validity_id
 * @property int $document_id
 * @property int $expiration_value
 * @property string $expiration_text
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentValiditiesDoc extends Model
{
	protected $table = 'document_validities_doc';
	protected $primaryKey = 'document_validity_id';

	protected $casts = [
		'document_id' => 'int',
		'expiration_value' => 'int'
	];

	protected $fillable = [
		'document_id',
		'expiration_value',
		'expiration_text'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
