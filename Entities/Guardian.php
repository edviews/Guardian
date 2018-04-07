<?php

namespace Modules\Guardian\Entities;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = [];

    public function student()
    {
        return $this->belongsTo('Modules\Student\Entities\Student');
    }
}
