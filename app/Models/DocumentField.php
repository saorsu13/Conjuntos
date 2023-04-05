<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentField
 * 
 * @property int $document_field_id
 * @property string $name
 * @property string $description
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DocumentContent[] $document_contents
 * @property Collection|DocumentType[] $document_types
 *
 * @package App\Models
 */
class DocumentField extends Model
{
	protected $table = 'document_fields';
	protected $primaryKey = 'document_field_id';

	protected $casts = [
		'order' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'order'
	];

	public function document_contents()
	{
		return $this->hasMany(DocumentContent::class);
	}

	public function document_types()
	{
		return $this->belongsToMany(DocumentType::class, 'document_types_document_fields')
					->withPivot('value')
					->withTimestamps();
	}
}
