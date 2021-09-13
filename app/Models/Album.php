<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'albums';


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
