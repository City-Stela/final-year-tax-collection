<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use App\Customer;
use App\Payment;



class BusinessType extends Model
{
    public $table = 'business_types';
    protected $fillable = [
        'business_types_name', 'business_types_amount'
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
