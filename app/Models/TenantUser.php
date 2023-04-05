<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class TenantUser
 * 
 * @property int $tenant_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Tenants $tenant
 * @property User $user
 *
 * @package App\Models
 */
class TenantUser extends Model
{
	protected $table = 'tenant_users';
	public $incrementing = false;

	protected $casts = [
		'tenant_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'tenant_id',
		'user_id'
	];

	public function tenants()
	{
		return $this->belongsTo(Tenants::class);
	}

	public function tenant(): HasOne
    {
        return $this->hasOne(Tenants::class, 'tenant_id', 'tenant_id');
    }

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
