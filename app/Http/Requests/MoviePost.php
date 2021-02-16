<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      title="Store Movie Request",
 *      required={"title,director,year"},
 *      description="Store Movie request body data",
 *      @OA\Xml(name="MoviePost"),
 * )
 */

class MoviePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    /**
     * @OA\Property(
     *      property = "title",
     *      title="name",
     *      description="Title",
     *      example="Titanic"
     * )
     *
     * @var string
     */

    /**
     * @OA\Property(
     *      property = "year",
     *      title="year",
     *      description="Year",
     *      example="1998"
     * )
     *
     * @var integer
     */

    /**
     * @OA\Property(
     *      property = "genre",
     *      title="genre",
     *      description="Genre",
     *      example="1"
     * )
     *
     * @var integer
     */

    /**
     * @OA\Property(
     *      property = "director",
     *      title="director",
     *      description="Director",
     *      example="Steven Spilberg"
     * )
     *
     * @var string
     */
    /**
     * @OA\Property(
     *      property = "synopsis",
     *      title="synopsis",
     *      description="Synopsis",
     *      example="De que va la pelicula"
     * )
     *
     * @var string
     */

    /**
     * @OA\Property(
     *      property = "poster",
     *      title="poster",
     *      description="Poster",
     *      example="adreça del poster"
     * )
     *
     * @var string
     */

    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'director' => 'required',
            'year' => 'required|numeric|min:1900'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio',
        ];
    }
}
