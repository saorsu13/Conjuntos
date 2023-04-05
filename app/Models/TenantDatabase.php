<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TenantsDatabase
 * 
 * @property int $tenant_database_id
 * @property int $tenant_id
 * @property string $driver
 * @property int $port
 * @property string $hostname
 * @property string $database_name
 * @property string $user_name
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Tenants $tenant
 *
 * @package App\Models
 */
class TenantDatabase extends Model
{
	protected $table = 'tenant_databases';
	protected $primaryKey = 'tenant_database_id';
	public $incrementing = false;

	protected $casts = [
		'tenant_database_id' => 'int',
		'tenant_id' => 'int',
		'port' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'tenant_id',
		'driver',
		'port',
		'hostname',
		'database_name',
		'user_name',
		'password'
	];

	public function tenants()
	{
		return $this->belongsTo(Tenant::class);
	}
}
