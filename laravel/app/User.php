<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Thread;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     *  Userの所有するCommentを取得
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    /**
     *  Userの所有するThreadを取得
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    /**
     *  Userの所有するTagを取得
     */
    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }

}
