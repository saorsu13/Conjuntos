<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Domain
 * 
 * @property int $domains_id
 * @property int $tenant_id
 * @property string $domain
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Tenants $tenant
 *
 * @package App\Models
 */
class Domain extends Model
{
	use SoftDeletes;
	protected $table = 'domains';
	protected $primaryKey = 'domains_id';
	public $incrementing = false;

	protected $casts = [
		'domains_id' => 'int',
		'tenant_id' => 'int'
	];

	protected $fillable = [
		'tenant_id',
		'domain'
	];

	public function tenants()
	{
		return $this->belongsTo(Tenants::class);
	}
}
