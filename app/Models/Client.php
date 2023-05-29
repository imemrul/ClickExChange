<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'url',
        'address',
        'click_count',
    ];

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }
}
