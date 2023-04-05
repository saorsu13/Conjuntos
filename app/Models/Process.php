<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Process
 * 
 * @property int $process_id
 * @property int $position_id
 * @property string $code
 * @property string $name
 * @property string $version
 * @property string $target
 * @property string $requirement_client
 * @property string $requirement_company
 * @property string $requirement_legal
 * @property string $sources
 * @property string $risk_client
 * @property string $risk_company
 * @property string $risk_legal
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Position $position
 * @property Collection|DocumentPosition[] $document_positions
 * @property Collection|Document[] $documents
 * @property Collection|Location[] $locations
 * @property Collection|ProcessPermission[] $process_permissions
 *
 * @package App\Models
 */
class Process extends Model
{
	protected $table = 'processes';
	protected $primaryKey = 'process_id';
	protected $connection = 'tenant';
	
	
	protected $casts = [
		'position_id' => 'int'
	];

	protected $fillable = [
		'position_id',
		'code',
		'name',
		'version',
		'target',
		'requirement_client',
		'requirement_company',
		'requirement_legal',
		'sources',
		'risk_client',
		'risk_company',
		'risk_legal'
	];

	public function position()
	{
		return $this->belongsTo(Position::class);
	}

	public function document_positions()
	{
		return $this->hasMany(DocumentPosition::class);
	}

	public function documents()
	{
		return $this->hasMany(Document::class);
	}

	public function locations()
	{
		return $this->belongsToMany(Location::class)
					->withPivot('location_process_id')
					->withTimestamps();
	}

	public function process_permissions()
	{
		return $this->hasMany(ProcessPermission::class);
	}
}
