<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'videos';


    /**
     *
     * @var array
     */
    protected $fillable = [
        'link','image'
    ];

}
