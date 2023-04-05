<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentDisposal
 * 
 * @property int $document_disposal_id
 * @property string $name
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class DocumentDisposal extends Model
{
	protected $table = 'document_disposals';
	protected $primaryKey = 'document_disposal_id';

	protected $fillable = [
		'name',
		'description'
	];
}
