<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voli extends Model
{
    use HasFactory;

    protected $fillable = [
        'home',
        'away',
        'score1',
        'set1',
        'score2',
        'set2',
        'note',
        'user_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
