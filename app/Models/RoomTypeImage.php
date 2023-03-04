<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypeImage extends Model
{
    use HasFactory;

    protected $table = 'room_type_images';

    protected $fillable = [
        'room_type_id',
        'img_src',
        'img_alt',
    ];
}
