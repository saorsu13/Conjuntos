<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentAuthorization
 * 
 * @property int $document_authorization_id
 * @property int $document_id
 * @property int $user_id
 * @property int $authorization
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 * @property User $user
 *
 * @package App\Models
 */
class DocumentAuthorization extends Model
{
	protected $table = 'document_authorizations';
	protected $primaryKey = 'document_authorization_id';

	protected $casts = [
		'document_id' => 'int',
		'user_id' => 'int',
		'authorization' => 'int'
	];

	protected $fillable = [
		'document_id',
		'user_id',
		'authorization'
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
