<?php

namespace App\Models;

// use Orchid\Filters\Types\Like;
// use Orchid\Filters\Types\Where;
// use Orchid\Filters\Types\WhereDateStartEnd;
// use Orchid\Platform\Models\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // /**
    //  * The attributes for which you can use filters in url.
    //  *
    //  * @var array
    //  */
    // protected $allowedFilters = [
    //        'id'         => Where::class,
    //        'name'       => Like::class,
    //        'email'      => Like::class,
    //        'updated_at' => WhereDateStartEnd::class,
    //        'created_at' => WhereDateStartEnd::class,
    // ];

    // /**
    //  * The attributes for which can use sort in url.
    //  *
    //  * @var array
    //  */
    // protected $allowedSorts = [
    //     'id',
    //     'name',
    //     'email',
    //     'updated_at',
    //     'created_at',
    // ];
}
