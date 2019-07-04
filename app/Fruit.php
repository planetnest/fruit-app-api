<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * summary
 */
class Fruit extends Model
{

	// $table = 'fruit';/
    /**
     * summary
     */
    protected $table = 'fruits';
    protected $fillable = [
        'name', 'season','description', 'images'
    ];
}
