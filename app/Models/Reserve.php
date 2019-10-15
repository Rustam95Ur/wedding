<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reserves';


    /**
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'agreement',
        'count_people',
    ];

}
