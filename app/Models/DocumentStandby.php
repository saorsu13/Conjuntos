<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentStandby
 * 
 * @property int $document_standby_id
 * @property int $document_id
 * @property int $user_id
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Document $document
 *
 * @package App\Models
 */
class DocumentStandby extends Model
{
	protected $table = 'document_standby';
	protected $primaryKey = 'document_standby_id';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
