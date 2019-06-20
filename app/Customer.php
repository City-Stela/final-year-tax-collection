<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Payment;
use App\BusinessType;

class Customer extends Model
{
    public $table = 'customers';
    protected $fillable = [
        'name','business_type_id',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    
    public function businessTypes()
    {
        return $this->belongsTo(BusinessType::class, 'business_type_id');
    }
}
