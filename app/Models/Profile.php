<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    protected $fillable = [
        'display_name',
        'handle',
        'bio',
        'avatar_url',
    ];

    public function profile() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function posts() : HasMany {
        return $this->hasMany(Post::class);
    }

    public function topLevelPosts() : HasMany {
        return $this->posts()->whereNull('parent_id');
    }
}
