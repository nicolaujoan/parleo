<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts_tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'tag_id'
    ];

    /**
     * Get the post associted
     */
    public function post() {
        $this->belongsTo(Post::class);
    }

    /**
     * Get the tag associated
     */
    public function tag()  {
        $this->belongsTo(Tag::class);
    }
}
