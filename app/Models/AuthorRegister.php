<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorRegister extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        "phone",
        "user_id",
        "about",
        "description",

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isRegistered()
    {
        return $this->belongsTo(User::class);
    }
}
