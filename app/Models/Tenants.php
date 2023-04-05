<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tenants
 * 
 * @property int $tenant_id
 * @property string $tenant_uid
 * @property string $company_name
 * @property string $short_company_name
 * @property string $database_prefix
 * @property string $address
 * @property string $vat
 * @property string $phone
 * @property string $website
 * @property string $options
 * @property int $active
 * @property string|null $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Domain[] $domains
 * @property Collection|EfficiencyManagement[] $efficiency_managements
 * @property Collection|TenantDatabase[] $tenant_databases
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Tenants extends Model
{
	use SoftDeletes;
	protected $table = 'tenants';
	protected $primaryKey = 'tenant_id';
	public $incrementing = false;

	protected $casts = [
		'tenant_id' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'tenant_uid',
		'company_name',
		'short_company_name',
		'database_prefix',
		'address',
		'vat',
		'phone',
		'website',
		'options',
		'active',
		'data'
	];

	public function domains()
	{
		return $this->hasMany(Domain::class);
	}

	public function efficiency_managements()
	{
		return $this->hasMany(EfficiencyManagement::class);
	}

	public function tenant_databases()
	{
        return $this->hasOne(TenantDatabase::class, 'tenant_id', 'tenant_id');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'tenant_users')
					->withTimestamps();
	}
}
