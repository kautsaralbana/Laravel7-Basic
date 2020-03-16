<?php

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];

    protected $table = 'ms_samples';

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
