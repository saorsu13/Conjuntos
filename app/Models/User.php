<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Doctrine\DBAL\Query;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 * 
 * @property int $user_id
 * @property string $user_uid
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string $role
 * @property string $options
 * @property int $active
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Session[] $sessions
 * @property Collection|Tenants[] $tenants
 * @property Collection|DocumentAuthorization[] $document_authorizations
 * @property Collection|DocumentChange[] $document_changes
 * @property Collection|DocumentComment[] $document_comments
 * @property Collection|DocumentForward[] $document_forwards
 * @property Collection|DocumentSighting[] $document_sightings
 * @property Collection|DocumentStandby[] $document_standbies
 * @property Collection|DocumentSuggestion[] $document_suggestions
 * @property Collection|DocumentTracing[] $document_tracings
 * @property Collection|Location[] $locations
 * @property Collection|Position[] $positions
 *
 * @package App\Models
 */
class User extends  Authenticatable
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';

	protected $casts = [
		'email_verified_at' => 'date',
		'two_factor_confirmed_at' => 'date',
		'active' => 'int'
	];

	protected $hidden = [
		'password',
		'two_factor_secret',
		'remember_token'
	];

	protected $fillable = [
		'user_uid',
		'name',
		'email',
		'email_verified_at',
		'password',
		'two_factor_secret',
		'two_factor_recovery_codes',
		'two_factor_confirmed_at',
		'role',
		'options',
		'active',
		'remember_token'
	];

	public function sessions()
	{
		return $this->hasMany(Session::class);
	}

	public function tenant_user(): HasOne
    {
        return $this->hasOne(TenantUser::class, 'user_id', $this->primaryKey);
    }

	public function tenants()
	{
		return $this->belongsToMany(Tenants::class, 'tenant_users')
					->withTimestamps();
	}

	public function document_authorizations()
	{
		return $this->hasMany(DocumentAuthorization::class);
	}

	public function document_changes()
	{
		return $this->hasMany(DocumentChange::class);
	}

	public function document_comments()
	{
		return $this->hasMany(DocumentComment::class);
	}

	public function document_forwards()
	{
		return $this->hasMany(DocumentForward::class);
	}

	public function document_sightings()
	{
		return $this->hasMany(DocumentSighting::class);
	}

	public function document_standbies()
	{
		return $this->hasMany(DocumentStandby::class);
	}

	public function document_suggestions()
	{
		return $this->hasMany(DocumentSuggestion::class);
	}

	public function document_tracings()
	{
		return $this->hasMany(DocumentTracing::class);
	}

	public function locations()
	{
		return $this->belongsToMany(Location::class, 'isoone_isoone_coning.location_position_user')
					->withPivot('location_position_user_id', 'position_id')
					->withTimestamps();
	}

	public function positions()
	{
		return $this->belongsToMany(Position::class, 'isoone_isoone_coning.position_user')
					->withPivot('position_user_id')
					->withTimestamps();
	}
	public function scopeGetUser($query,$tenantId){
		$query
		->select('users.*')
		->join('tenant_users as t_u','users.user_id','=','t_u.user_id')
		->where('t_u.tenant_id','=',$tenantId);
	}
}
