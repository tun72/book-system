<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorIncomes extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id',
        'user_id',
        "ggcoin",
        "book_id"
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
