<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartiesManagement
 * 
 * @property int $party_management_id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PartiesManagement extends Model
{
	protected $table = 'parties_management';
	protected $primaryKey = 'party_management_id';

	protected $fillable = [
		'name',
		'code',
		'description'
	];
}
