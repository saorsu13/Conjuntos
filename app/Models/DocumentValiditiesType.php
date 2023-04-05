<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentValiditiesType
 * 
 * @property int $document_validity_id
 * @property int $document_type_id
 * @property int $expiration_value
 * @property string $expiration_text
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property DocumentType $document_type
 *
 * @package App\Models
 */
class DocumentValiditiesType extends Model
{
	protected $table = 'document_validities_type';
	protected $primaryKey = 'document_validity_id';

	protected $casts = [
		'document_type_id' => 'int',
		'expiration_value' => 'int'
	];

	protected $fillable = [
		'document_type_id',
		'expiration_value',
		'expiration_text'
	];

	public function document_type()
	{
		return $this->belongsTo(DocumentType::class);
	}
}
