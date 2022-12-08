<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rol_id',
        'user_id',
        'community_id'
    ];

    /**
     * Get the roles this register has.
     */
    public function roles() {
        return $this->hasMany(Role::class);
    }

    /**
     * Get the users this register has.
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Get the communities this register has.
     */
    public function communities() {
        return $this->hasMany(Community::class);
    }
}
