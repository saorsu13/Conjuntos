<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentIndex
 * 
 * @property int $document_index_id
 * @property string $name
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class DocumentIndex extends Model
{
	protected $table = 'document_indexes';
	protected $primaryKey = 'document_index_id';

	protected $fillable = [
		'name',
		'description'
	];
}
