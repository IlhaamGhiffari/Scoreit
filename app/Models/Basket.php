<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    use HasFactory;


    protected $fillable = [
        'home',
        'away',
        'score1',
        'babak',
        'score2',
        'note',
        'user_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
