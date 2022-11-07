<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'credit_id',
        'amount',
        'period'
    ];

    protected $with = ['client', 'credit'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function credit()
    {
        return $this->belongsTo(Credit::class);
    }
}
