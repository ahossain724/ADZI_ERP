<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Rbo extends Model
{
    protected $table = 'rbos';
    protected $primaryKey = 'id';
    protected $fillable = [
          'rbo_name',
          'short_name',
          'customer_name',
          'address',
        ];
     use HasFactory;
}
