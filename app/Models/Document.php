<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 * 
 * @property int $document_id
 * @property int $system_id
 * @property int $process_id
 * @property int $document_type_id
 * @property int $location_id
 * @property string $code
 * @property int $serial
 * @property string $name
 * @property string|null $filename
 * @property int $version
 * @property int $position_edit_id
 * @property int $position_review_id
 * @property int $position_approve_id
 * @property string|null $settings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DocumentType $document_type
 * @property Location $location
 * @property Process $process
 * @property Collection|DocumentAuthorization[] $document_authorizations
 * @property Collection|DocumentChange[] $document_changes
 * @property Collection|DocumentComment[] $document_comments
 * @property Collection|DocumentContent[] $document_contents
 * @property Collection|DocumentForward[] $document_forwards
 * @property Collection|DocumentLink[] $document_links
 * @property Collection|DocumentPermission[] $document_permissions
 * @property Collection|DocumentRecordContent[] $document_record_contents
 * @property Collection|DocumentRecord[] $document_records
 * @property Collection|DocumentSighting[] $document_sightings
 * @property Collection|DocumentStandby[] $document_standbies
 * @property Collection|DocumentStatus[] $document_statuses
 * @property Collection|DocumentTag[] $document_tags
 * @property Collection|DocumentTracing[] $document_tracings
 * @property Collection|DocumentValiditiesDoc[] $document_validities_docs
 *
 * @package App\Models
 */
class Document extends Model
{
	protected $table = 'documents';
	protected $primaryKey = 'document_id';
	protected $connection = 'tenant';


	protected $casts = [
		'system_id' => 'int',
		'process_id' => 'int',
		'document_type_id' => 'int',
		'location_id' => 'int',
		'serial' => 'int',
		'version' => 'int',
		'position_edit_id' => 'int',
		'position_review_id' => 'int',
		'position_approve_id' => 'int'
	];

	protected $fillable = [
		'system_id',
		'process_id',
		'document_type_id',
		'location_id',
		'code',
		'serial',
		'name',
		'filename',
		'version',
		'position_edit_id',
		'position_review_id',
		'position_approve_id',
		'settings'
	];

	public function document_type()
	{
		return $this->belongsTo(DocumentType::class);
	}

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function process()
	{
		return $this->belongsTo(Process::class);
	}

	public function document_authorizations()
	{
		return $this->hasMany(DocumentAuthorization::class);
	}

	public function document_changes()
	{
		return $this->hasMany(DocumentChange::class);
	}

	public function document_comments()
	{
		return $this->hasMany(DocumentComment::class);
	}

	public function document_contents()
	{
		return $this->hasMany(DocumentContent::class);
	}

	public function document_forwards()
	{
		return $this->hasMany(DocumentForward::class);
	}

	public function document_links()
	{
		return $this->hasMany(DocumentLink::class);
	}

	public function document_permissions()
	{
		return $this->hasMany(DocumentPermission::class);
	}

	public function document_record_contents()
	{
		return $this->hasMany(DocumentRecordContent::class);
	}

	public function document_records()
	{
		return $this->hasMany(DocumentRecord::class);
	}

	public function document_sightings()
	{
		return $this->hasMany(DocumentSighting::class);
	}

	public function document_standbies()
	{
		return $this->hasMany(DocumentStandby::class);
	}

	public function document_statuses()
	{
		return $this->hasMany(DocumentStatus::class);
	}

	public function document_tags()
	{
		return $this->hasMany(DocumentTag::class);
	}

	public function document_tracings()
	{
		return $this->hasMany(DocumentTracing::class);
	}

	public function document_validities_docs()
	{
		return $this->hasMany(DocumentValiditiesDoc::class);
	}
}
