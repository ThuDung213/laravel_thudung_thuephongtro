<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongTro extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'start_date',
        'payment_id',
        'note',
    ];
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
