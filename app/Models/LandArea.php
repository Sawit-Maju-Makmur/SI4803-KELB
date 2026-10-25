<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandArea extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'polygon_coordinates',
    ];
}
