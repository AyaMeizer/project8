<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
   protected $fillables=[
        'name',
        'phone',
        'price',
        'date',
        'time',
        'user_id',
        'movie_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function movie()
    {
        return $this->belongsTo(Ticket::class, 'movie_id', 'id');
    }

}
