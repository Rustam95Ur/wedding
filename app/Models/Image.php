<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    const TYPE_REPORT = 1;
    const TYPE_GALLERY = 2;
    const TYPE_RESERVE = 3;
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
        'image','type'
    ];

}
