<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $table='insurances';
    public $timestamps ='true';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'mobile',
        'email_id',
        'customer_no',
        'health_advisor'
    ];
}
