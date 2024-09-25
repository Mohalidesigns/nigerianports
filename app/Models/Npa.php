<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Npa extends Model
{
    protected $table = 'npas';
    protected $fillable = [
    'cname',
    'phone',
    'address',
    'vregistration',
    'enumber',
    'vmake',
    'fee',
    'idate',
    'edate',
    ];


}
