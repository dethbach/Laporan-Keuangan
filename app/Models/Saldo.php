<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function saldouser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
