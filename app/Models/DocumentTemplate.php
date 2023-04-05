<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTemplate
 * 
 * @property int $document_template_id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class DocumentTemplate extends Model
{
	protected $table = 'document_templates';
	protected $primaryKey = 'document_template_id';

	protected $fillable = [
		'name',
		'description',
		'content'
	];
}
