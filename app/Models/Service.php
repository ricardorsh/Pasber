<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable = [
        'bill_num',
		'price',
		'client_id',
        'description',
        'first_service',
        'last_service'
    ];
}
