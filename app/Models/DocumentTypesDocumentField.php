<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTypesDocumentField
 * 
 * @property int $document_type_id
 * @property int $document_field_id
 * @property int $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DocumentField $document_field
 * @property DocumentType $document_type
 *
 * @package App\Models
 */
class DocumentTypesDocumentField extends Model
{
	protected $table = 'document_types_document_fields';
	public $incrementing = false;

	protected $casts = [
		'document_type_id' => 'int',
		'document_field_id' => 'int',
		'value' => 'int'
	];

	protected $fillable = [
		'document_type_id',
		'document_field_id',
		'value'
	];

	public function document_field()
	{
		return $this->belongsTo(DocumentField::class);
	}

	public function document_type()
	{
		return $this->belongsTo(DocumentType::class);
	}
}
