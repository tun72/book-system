<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "id",
        "user_id",
        "about",
        "isVerified"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "id");
    }

    public function isFollowed($book)
    {
        return $this->favouritedBooks->contains("id", $book->id);
    }

    public function subscribers()
    {

        return $this->belongsToMany(User::class, "author_user");
    }
}
