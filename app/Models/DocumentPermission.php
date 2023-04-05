<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentPermission
 * 
 * @property int $document_permission_id
 * @property int $document_id
 * @property int $location_id
 * @property string $permissions
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Document $document
 * @property Location $location
 *
 * @package App\Models
 */
class DocumentPermission extends Model
{
	protected $table = 'document_permissions';
	protected $primaryKey = 'document_permission_id';

	protected $casts = [
		'document_id' => 'int',
		'location_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'location_id',
		'permissions'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function location()
	{
		return $this->belongsTo(Location::class);
	}
}
