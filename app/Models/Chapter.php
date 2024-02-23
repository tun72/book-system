<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "intro",
        "story",
        "book_id",
        "slug",
        "chapter",
        "is_free",
        "is_finish"
    ];

    public static function boot()
    {
        parent::boot();
        static::deleted(function ($chapQuery) {
            foreach ($chapQuery->comments as $comment) {
                if ($comment) {
                    $comment->delete();
                }
            }
        });
    }


    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
