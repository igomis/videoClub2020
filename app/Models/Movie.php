<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * required={"id,title"},
 * @OA\Xml(name="Movie"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="title", type="string", readOnly="true", description="User role"),
 * @OA\Property(property="year", type="integer", readOnly="true",  description="Year", example="1956"),
 * @OA\Property(property="director", type="string", readOnly="true",  description="Director", example="Copolla"),
 * @OA\Property(property="genre", type="string", readOnly="true",  description="Genre", example="Thriller"),
 * )
 *
 * Class Movie
 *
 */



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
