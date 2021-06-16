<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumArtist extends Model
{
    use HasFactory;

    protected $table = 'album_artist';

    protected $fillable = ['artist_id', 'album_id'];

}
