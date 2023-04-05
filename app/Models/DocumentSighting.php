<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentSighting
 * 
 * @property int $document_sighting_id
 * @property int $document_id
 * @property int $user_id
 * @property string|null $type
 * @property Carbon $date
 * @property string $page
 * @property string $section
 * @property string $content
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentSighting extends Model
{
	protected $table = 'document_sightings';
	protected $primaryKey = 'document_sighting_id';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int',
		'date' => 'date',
		'status' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'type',
		'date',
		'page',
		'section',
		'content',
		'status'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
