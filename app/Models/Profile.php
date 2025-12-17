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

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function follow(Profile $profile): void
    {
        Follow::createFollow($this, $profile);
    }

    public function followers()
    {
        return $this->belongsToMany(
            Profile::class,
            'follows',
            'following_profile_id',
            'follower_profile_id',
        );
    }

    public function followings()
    {
        return $this->belongsToMany(
            Profile::class,
            'follows',
            'follower_profile_id',
            'following_profile_id',
        );
    }
}
