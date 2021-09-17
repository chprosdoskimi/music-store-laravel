<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

    protected $fillable = ['name'];

    /**
     * Get the users for seller.
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
