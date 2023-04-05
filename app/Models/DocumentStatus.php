<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentStatus
 * 
 * @property int $document_status_id
 * @property int $document_id
 * @property string $action
 * @property Carbon $action_date
 * @property string $action_by
 * @property Carbon|null $delivery_date
 * @property Carbon $return_date
 * @property string|null $return_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentStatus extends Model
{
	protected $table = 'document_status';
	protected $primaryKey = 'document_status_id';

	protected $casts = [
		'document_id' => 'int',
		'action_date' => 'date',
		'delivery_date' => 'date',
		'return_date' => 'date'
	];

	protected $fillable = [
		'document_id',
		'action',
		'action_date',
		'action_by',
		'delivery_date',
		'return_date',
		'return_by'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
