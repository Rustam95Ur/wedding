<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';


    /**
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];

}
