<?php

namespace App;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

use App\PaymentMethod;
use App\BusinessType;

class Payment extends Model
{
    public $table = 'payments';
    protected $fillable = [
        'customer_id','payment_method_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}