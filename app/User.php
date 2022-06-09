<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SoftDeletes;
     /** @OA\Schema(
     *     schema="User",
     *     required={ "first_name", "last_name", "email", "password"},
     *     
     *     @OA\Property(
     *         property="first_name",
     *         type="string"
     *     ),
     *      @OA\Property(
     *         property="last_name",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="email",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="email_verified_at",
     *         type="string",
     *         format="date-time"
     *     ),
     *     @OA\Property(
     *         property="password",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time"
     *     ),
     *     @OA\Property(
     *         property="updated_at",
     *         type="string",
     *         format="date-time"
     *     )
     * ),
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      /** @OA\Schema(
     *     schema="user",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64"
     *     ),
     *     @OA\Property(
     *         property="first_name",
     *         type="string"
     *     ),
     *         @OA\Property(
     *         property="last_name",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="email",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="password",
     *         type="string"
     *     ),
     * @OA\Property(
     *         property="deleted_at",
     *         type="string",
     *         format="date-time"
     *     ),
     *     @OA\Property(
     *         property="role",
     *         type="string"
     *     ),
     * ),
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
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

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
