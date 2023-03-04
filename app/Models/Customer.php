<?php

namespace App\Models;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'mobile',
        'address',
        'photo'
    ];



    public function bookings(){
        return $this->hasMany(Booking::class);
}

public function customerTest()
{
    return $this->hasMany(Testimonial::class, 'customer_id', 'id');
}

}
