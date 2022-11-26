<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tag';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'community_id'
    ];

    /**
     * Get the community associated with this tag.
     */
    public function community() {
        return $this->belongsTo(Community::class);
    }

    /**
     * Get the posts with this tag.
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
