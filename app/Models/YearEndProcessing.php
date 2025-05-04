<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class YearEndProcessing extends Model
{
    protected $table = 'year_end_processings';
    protected $primaryKey = 'id';
     protected $fillable = [
          'year',
          'transfer_amount',
          'voucher_prefix',
        ];
     use HasFactory;
}
