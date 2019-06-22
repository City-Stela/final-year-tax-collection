<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'status';
    protected $fillable = [
        'status_value'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
