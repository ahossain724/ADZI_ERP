<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Allocation extends Model
{
    protected $table = 'allocations';
    protected $primaryKey = 'id';
     protected $fillable = [
          'alc_no',
          'alcrow',
          'alcamt',
          'date',
          'invcur',
        ];
     use HasFactory;
}