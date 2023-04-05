<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EfficiencyManagement
 * 
 * @property int $efficiency_managements_id
 * @property int $_id
 * @property int $management_id
 * @property string $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Tenants $tenant
 *
 * @package App\Models
 */
class EfficiencyManagement extends Model
{
	protected $table = 'efficiency_managements';
	protected $primaryKey = 'efficiency_managements_id';
	public $incrementing = false;

	protected $casts = [
		'efficiency_managements_id' => 'int',
		'tenant_id' => 'int',
		'management_id' => 'int'
	];

	protected $fillable = [
		'tenant_id',
		'management_id',
		'data'
	];

	public function tenants()
	{
		return $this->belongsTo(Tenants::class);
	}
}
