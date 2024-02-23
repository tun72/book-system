<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "about",
        "recipient_id",
        "is_seen",
        "book_id",
        "chapter_id",
        "comment_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reciper()
    {
        return $this->belongsTo(User::class, "recipient_id", "id");
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function comment()
    {
        return $this->belongsTo(Comments::class);
    }

    // public function 
}
