<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        "private",
        "user_id"
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, "book_read_list");
    }

    public function isInreadLists($book)
    {
        // dd($this->books->contains("id", $book->id));
        return $this->books->contains("id", $book->id);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
