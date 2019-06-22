<?php

namespace App;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

use App\PaymentMethod;
use App\BusinessType;
use App\Status;

class Payment extends Model
{
    public $table = 'payments';
    protected $fillable = [
        'payment_token','status_id','payment_method_id','customer_id'
    ];

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}