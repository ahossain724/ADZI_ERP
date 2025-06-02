<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Currency extends Model
{
    protected $table = 'currencies';
    protected $primaryKey = 'id';
     protected $fillable = [
          'currency',
          'shortname',
          'name',
          'cent',
          'cents',
          'decimal_places',
          'active',
          'exchange_rate',
          'exchange_ratesell',
          'exchange_ratebuy',
          'wordformula',
          'effectivity_date',
        ];
     use HasFactory;
}
