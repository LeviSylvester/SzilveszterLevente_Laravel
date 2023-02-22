<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_client',
        'to_client',
        'size',
        'weight',
        'category',
        'urgency',
        'price',
        'status'
    ];

    public function fromClient()
    {
        return $this->belongsTo(Utilizator::class, 'from_client');
    }

    public function toClient()
    {
        return $this->belongsTo(Utilizator::class, 'to_client');
    }
}

