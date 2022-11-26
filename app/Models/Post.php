<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'community_id'
    ];

    /**
     * Get comments made in this post.
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the tags in this post.
     */

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the user in this post.
     */

    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the community this post belongs.
     */

    public function community() {
        return $this->belongsTo(Community::class);
    }


}
