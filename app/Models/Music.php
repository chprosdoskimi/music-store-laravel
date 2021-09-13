<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'musics';

    /**
     * Get the users for seller.
     */
    public function getFormatedDurationAttribute()
    {
        return gmdate("i:s", $this->duration);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
