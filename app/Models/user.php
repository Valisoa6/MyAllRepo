<?php

namespace App\Models;

use App\Models\Employe;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'type',
        'phone',
        "password"
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function employes()
    {
        return $this->hasMany(Employe::class, 'userId', 'id');
    }

        /**
     * Get the identifier that will be stored in the JWT token.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
