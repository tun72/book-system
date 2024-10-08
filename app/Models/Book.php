<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        "isFree",
        "ggcoin",
        "image",
        "body",
        'rating',
        "user_id",
        "publish",
        "isPublished",
        "status",
        "discount",
        "caption",
        "isRequested"
    ];

    public static function boot()
    {
        parent::boot();
        static::deleted(function ($bookQuery) {
            if ($bookQuery->archive) {
                $bookQuery->archive->delete();
            }
            if (File::exists($file = public_path($bookQuery->image))) {
                File::delete($file);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function archive()
    {
        return $this->belongsTo(Archive::class, "id", "book_id");
    }

    public function genres()
    {
        return $this->belongsToMany(Genres::class, "book_genres");
    }


    public function readLists()
    {
        return $this->belongsToMany(ReadList::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, "book_id");
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function readers()
    {
        return $this->belongsToMany(User::class);
    }

    public function purchasers()
    {
        return $this->belongsToMany(User::class, "buy_book");
    }


    public function getPurchasers()
    {
        return $this->purchasers->filter(fn ($user) => $user->id != auth()->user()->id);
    }

    public function scopeFilter($bookQuery, $filters)
    {
        if ($genres = $filters["genres"] ?? null) {

            // dd($genres);
            $genres = explode(",", $genres);
            // dd($genres);

            $bookQuery->whereHas("genres", function ($genresQuery) use ($genres) {
                $genresQuery->whereIn("slug", $genres);
            });
        }

        if ($search = $filters["search"] ?? null) {
            $bookQuery->where(function ($searchQuery) use ($search) {
                $searchQuery->where("title", "LIKE", "%" . $search . "%")->orwhere("body", "LIKE", "%" . $search . "%");
            });
        }

        if ($author = $filters["author"] ?? null) {
            $bookQuery->whereHas("user", function ($query) use ($author) {
                $query->where("username", $author);
            });
        }


        if ($status = $filters["status"] ?? null) {
            $bookQuery->where(function ($query) use ($status) {
                $query->where("isPublished", $status === "true");
            });
        }


        if ($price = $filters["price"] ?? null) {
            $bookQuery->where(function ($query) use ($price) {

                if ($price === "free") {
                    $query->where("ggcoin", 0);
                } else if ($price === "paid") {
                    $query->where("ggcoin", ">", 0);
                }
            });
        }

        if ($ggcoin = $filters["ggcoin"] ?? null) {
            $bookQuery->where(function ($query) use ($ggcoin) {
                $query->where("ggcoin", '>=', $ggcoin);
            });
        }

        if ($id = $filters["id"] ?? null) {
            $bookQuery->where(function ($query) use ($id) {
                $query->where("id", $id);
            });
        }
    }
}


// Before multiple filter

// if (request("genres"))
//     $title = Genres::where("slug", request("genres"))->first()?->name;
//     $books = Book::whereHas("genres", function ($genresQuery) {
//     $genresQuery->where("slug", request("genres"));
// })->latest()->get();
// if (request("search")) {
//     $books  = Book::where(function ($searchQuery) {
//         $searchQuery->where("title", "LIKE", "%" . request("search") . "%")->orwhere("body", "LIKE", "%" . request("search") . "%");
//     })->get();
// }
// if (request("author")) {
//     $books = Book::whereHas("user", function ($query) {
//         $query->where("username", request("author"));
//     })->latest()->get();
// }
