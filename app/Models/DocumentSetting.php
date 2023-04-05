<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentSetting
 * 
 * @property int $document_settings_id
 * @property string $settings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class DocumentSetting extends Model
{
	protected $table = 'document_settings';
	protected $primaryKey = 'document_settings_id';

	protected $fillable = [
		'settings'
	];
}
