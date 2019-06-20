<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Payment;

class PaymentMethod extends Model
{
    public $table = 'payment_methods';
    protected $fillable = [
        'payment_method_name'
    ];


    public function payments(){
        return $this->hasMany(Payment::class);

    }
}





?>