<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discography extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'audio_path',
        'release_date',
        'album_id',
    ];
    protected $casts = [
        'release_date' => 'datetime',
    ];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
