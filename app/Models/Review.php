<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        "body",
        "rating",
        "user_id",
        "book_id"
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }

    public function isCommented($user)
    {
        return $this->comments->contains("user_id", $user->id);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likable');
    }

    public function isLiked($user)
    {
        return $this->likes->contains("user_id", $user->id);
    }
}
