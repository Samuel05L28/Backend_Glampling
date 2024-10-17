<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinService extends Model
{
    use HasFactory;

    protected $table = 'cabin_service';

    protected $fillable = [
        'cabins_id',
        'service_id'
    ];
}
