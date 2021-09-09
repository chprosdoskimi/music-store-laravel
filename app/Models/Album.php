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
    protected $table = 'albuns';


    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }
}
