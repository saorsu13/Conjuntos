<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentType
 * 
 * @property int $document_type_id
 * @property string $code
 * @property string $category
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DocumentField[] $document_fields
 * @property Collection|DocumentValiditiesType[] $document_validities_types
 * @property Collection|Document[] $documents
 *
 * @package App\Models
 */
class DocumentType extends Model
{
	protected $table = 'document_types';
	protected $primaryKey = 'document_type_id';

	protected $fillable = [
		'code',
		'category',
		'name'
	];

	public function document_fields()
	{
		return $this->belongsToMany(DocumentField::class, 'document_types_document_fields')
					->withPivot('value')
					->withTimestamps();
	}

	public function document_validities_types()
	{
		return $this->hasMany(DocumentValiditiesType::class);
	}

	public function documents()
	{
		return $this->hasMany(Document::class);
	}
}
