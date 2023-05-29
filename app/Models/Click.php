<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = [
        'client_id',
        'url',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
