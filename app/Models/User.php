<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'imageUrl',
        'user_plan',
        "phoneNumber"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function outcomes()
    {
        return $this->hasMany(AuthorIncomes::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favouritedBooks()
    {
        return $this->belongsToMany(Book::class);
    }

    public function isFavourited($book)
    {
        return $this->favouritedBooks->contains("id", $book->id);
    }


    public function author()
    {
        return $this->belongsTo(AuthorProfile::class, "id");
    }

    public function isFollowed($book)
    {
        return $this->favouritedBooks->contains("id", $book->id);
    }


    public function isBought($book)
    {
        return $this->boughtBooks->contains("id", $book->id);
    }

    public function boughtBooks()
    {
        return $this->belongsToMany(Book::class, "buy_book");
    }

    public function subscribe()
    {
        return $this->belongsToMany(AuthorProfile::class, "author_user");
    }

    public function isSubscribed($author)
    {
        return $this->subscribe->contains("user_id", $author->user_id);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, "recipient_id");
    }

    public function getCountNotifications()
    {
        return count($this->notifications()->where("is_seen",  0)->get());
    }


    public function readLists()
    {
        return $this->hasMany(ReadList::class);
    }
}
