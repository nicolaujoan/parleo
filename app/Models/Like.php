<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'like';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type'
    ];

    /**
     * Get the user that give this like.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the post with this like.
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the comment with this like.
     */
    public function comment() {
        return $this->belongsTo(Comment::class);
    }
}
