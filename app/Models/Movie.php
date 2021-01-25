<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Genre(){
        return $this->belongsTo(Genre::class);
    }

    public function Users(){
        return $this->belongstoMany(User::class,'rents')->withPivot(['dateRent','dateReturn']);
    }

    public function getGenreIdOptions(){
        return hazArray(Genre::all(),'id','title');
    }
}
