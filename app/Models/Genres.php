<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\File;

class Genres extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static function boot()
    {
        parent::boot();
        static::deleted(function ($genresQuery) {
            if (File::exists($file = public_path($genresQuery->image))) {
                File::delete($file);
            }
        });
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, "book_genres");
    }

    
}
