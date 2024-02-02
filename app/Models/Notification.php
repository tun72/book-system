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
        "chapter_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "recipient_id");
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
