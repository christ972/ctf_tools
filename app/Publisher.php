<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    
    protected $guarded  = [
        'created_at', 'updated_at'
    ];

}
