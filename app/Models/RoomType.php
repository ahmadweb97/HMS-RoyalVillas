<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'detail',
        'price',
        'photo',
    ];

    public function roomTypeImages()
    {
        /* return $this->belongsTo(RoomTypeImage::class, 'room_type_id'); */
        return $this->hasMany(RoomTypeImage::class, 'room_type_id', 'id');

    }

}
