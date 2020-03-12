<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
      'name', 'detail'
    ];

    protected $table = 'ms_samples';
}
