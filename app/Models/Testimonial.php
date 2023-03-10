<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable = [
        'customer_id',
        'testi_cont'

    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
