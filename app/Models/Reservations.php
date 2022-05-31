<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $primaryKey = 'id';

    protected $fillable = ['first_name','lastname','email','phone','guest','status','reference','amount','customer_code','paid_at','reservation_date','reservation_time'];
}
