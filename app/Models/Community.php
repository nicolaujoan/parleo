<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'communities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the tags associated with this community.
     */
    public function tags() {
        return $this->hasMany(Tag::class);
    }

    /**
     * Get the posts associated with this community.
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
