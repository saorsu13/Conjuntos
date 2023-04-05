<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentExtra
 * 
 * @property int $document_extra_id
 * @property string $name
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class DocumentExtra extends Model
{
	protected $table = 'document_extras';
	protected $primaryKey = 'document_extra_id';

	protected $fillable = [
		'name',
		'description'
	];
}
