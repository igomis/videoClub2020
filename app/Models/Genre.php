<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function Movies(){
        return $this->belongsToMany(Movie::class);
    }

}
