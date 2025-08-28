<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'location',
        'ticket_price',
        'user_id',
        'poster_path', // ✅ tambahkan ini
    ];

    // relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getPosterUrlAttribute()
    {
        return $this->poster_path ? asset('storage/' . $this->poster_path) : null;
    }

    protected $casts = [
        'date' => 'datetime',
    ];

}
