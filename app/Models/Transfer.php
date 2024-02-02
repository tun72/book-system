<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        "ggcoin",
        "image",
        "accname",
        "user_id",
        "payment"
    ];

    public static function boot()
    {
        parent::boot();
        static::deleted(function ($tranQuery) {
            if (File::exists($file = public_path($tranQuery->image))) {
                File::delete($file);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
