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
        "exp",
        "phone",
        "user_id",
        "description",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
