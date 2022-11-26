<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];

    /**
     * Get the user that made this comment.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post this comment was made.
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
