<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'language', 'translatable_id', 'translatable_type', 'name', 'value',
    ];

    public function getTable()
    {
        return config('translation.mysql.table', 'translations');
    }
}
