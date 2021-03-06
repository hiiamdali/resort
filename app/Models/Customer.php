<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['fullname','phone_number','email'];
    public function orders()
    {
        return $this->hasMany(Order::class,'customer_id','id');
    }
}
