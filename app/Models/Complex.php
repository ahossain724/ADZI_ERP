<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Complex extends Model
{
    protected $table = 'complexes';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'reference',
          'date',
          'year',
          'period',
          'header_description',
        ];
     use HasFactory;
}