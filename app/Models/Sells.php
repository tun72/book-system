<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Sells extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::deleted(function ($sellQuery) {
            if (File::exists($file = public_path($sellQuery->qrcode))) {
                File::delete($file);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
